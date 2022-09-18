<?php 

class FooterLink {
    public $title;
    public $links = [];
    public $urls = [];

    public function __construct($_title, ...$_links)
    {
        $this->title = $_title;
        $this->addLinks($_links);
        $this->addUrls();
    }

    public function addLinks($_link) {
        $this->links = array_merge($this->links, $_link);
    }

    public function addUrls() {
        foreach($this->links as $link) {
            array_push($this->urls, "#");
        }
    }
}
return  [
    $dcComics = new FooterLink("dc comics", "Characters",  "Comics", "Movies", "TV", "Games", "Videos", "News"),
    $dc = new FooterLink("DC", "Term of use", "Privacy policy (new)", "Ad choices", "Advertising", "Jobs", "Subscriptions", "Talent workshops", "CPSC certificates", "Ratings", "Shop help", "Contact us"),
    $sites = new FooterLink("sites", "DC", "MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"),
    $shop = new FooterLink("shop", "Shop DC", "Shop DC Collectibles")
]
?>