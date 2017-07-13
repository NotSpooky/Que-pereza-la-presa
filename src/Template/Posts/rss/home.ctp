<?php
$this->set('channelData', [
    'title' => __("Most Recent Posts"),
    'link' => $this->Url->build('/', true),
    'description' => __("Most recent posts."),
    'language' => 'es'
]);

foreach ($posts as $post){
    $link = 'posts/view/'.$post->id;
    echo $this->Rss->item([], [
        'title'       => $post->title,
        'link'        => $link,
        'guid'        => ['url' => $link, 'isPermaLink' => true],
        'description' => $post->summary,
        'pubDate'     => $post->created
    ]);
}
