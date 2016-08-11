<?php
/**
 * Created by PhpStorm.
 * User: chenyihong
 * Date: 16/8/9
 * Time: 14:07
 */

namespace CorpWeChat\Models\MaterialItems;

use CorpWeChat\Models\Articles\MpNewArticle;

/**
 * Class MpNewsItem
 * @package CorpWeChat\Models\MaterialItems
 */
class MpNewsItem
{
    protected $mediaId;
    protected $content = [
        'articles' => [],
    ];

    /**
     * @return mixed
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * @param mixed $mediaId
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;
    }

    /**
     * @return array
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param MpNewArticle $article
     */
    public function addArticle(MpNewArticle $article)
    {
        $this->content['articles'][] = $article;
    }
}
