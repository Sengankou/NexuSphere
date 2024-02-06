<?php

namespace App\Livewire\Accesslinks;

use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Accesslink;
use Livewire\Attributes\On;

class Show extends Component
{
    public Collection $accesslinks;
    public $subcategory_id;
    public $favicon_urls;

    public function mount(): void
    {
        $this->getAccesslinks();
        $this->getFaviconUrls();
    }

    public function getFaviconUrls(): void
    {
        $this->favicon_urls = [];
        foreach ($this->accesslinks as $accesslink) {
            $parsedUrl = parse_url($accesslink->link_url);
            $domain = $parsedUrl['host'] ?? '';

            // GoogleのfaviconサービスURLにドメイン名を組み込む
            $faviconUrl = 'https://www.google.com/s2/favicons?domain=' . $domain;

            // $favicon_urls配列にfaviconのURLを追加する
            $this->favicon_urls[$accesslink->id] = $faviconUrl;
        }
    }

    #[On('accesslink-created')]
    public function getAccessLinks(): void
    {
        $this->accesslinks = Accesslink::whereHas('subcategory', function ($query) {
            $query->where('id', $this->subcategory_id);
        })->orderBy('display_order', 'asc')
            ->get();
        $this->getFaviconUrls();
    }

    public function render()
    {
        return view('livewire.accesslinks.show');
    }
}
