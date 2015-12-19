<div class="vp-poll-list-item">
    <div class="vp-header">
        <div class="vp-like">
            <div class="vp-like-counter"><?=$model->topic_count_vote?></div>
            <div class="vp-like-buttons">
                <a href="#" class="vp-like-up"></a>
                <a href="#" class="vp-like-dn"></a>
            </div>
            <div class="vp-like-icon"></div>
        </div>
        <div class="vp-author">
            <div class="vp-photo">
                <div></div>
            </div>
            <strong><?=$model->user->user_profile_name?></strong>
            <br>
            <span><?=$model->user->user_skill?></span>
        </div>
        <div class="vp-time-n-share">
            <span><?=$model->topic_date_add?></span>
            <a href="#" id="vp-share-more">Тағы</a>
        </div>
    </div>
    <div class="vp-question">
        <h3><a href='?r=topic/view&id=<?=$model->topic_id?>'><?=$model->topic_title?></a></h3>

    </div>
    <div>
        <?=$model->topicContent->topic_text_short ?>
    </div>
     <div class="vp-revote-n-comment">
        <a href="./comment.html" class="vp-comment-link">
            <strong></strong>
            <span><?=count($model->comments) ?></span>
            комментировать
        </a>
    </div>
</div>