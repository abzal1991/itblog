            <li>
                <span>
                    <a href="#">Жауап беру</a>
                    <span>
                        <a href="#" class="vp-likeup"></a>
                        <a href="#" class="vp-likedn"></a>
                        <i><?php echo $model->comment_count_vote?></i>
                        <span></span>
                        <strong><?php echo $model->user->user_profile_name?></strong>
                        <em><?php echo $model->comment_date?></em>
                    </span>
                </span>
        <?php echo $model->comment_text?>
            </li>
