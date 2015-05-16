<?php
    global $post;
    $question      = QA_Questions::convert($post);
    $et_post_date  = et_the_time(strtotime($question->post_date));
    $category      = !empty($question->question_category[0]) ? $question->question_category[0]->name : __('No Category',ET_DOMAIN);
    $category_link = !empty($question->question_category[0]) ? get_term_link( $question->question_category[0]->term_id, 'question_category' ) : '#';
    $title         = $post->post_status == "pending" ? 'title="'.__('Pending Question', ET_DOMAIN).'"' : '';
?>
<li <?php post_class( 'question-item' );?> data-id="<?php echo $post->ID ?>" <?php echo $title ?>>
    <div class="col-md-8 col-xs-8 q-left-content">
        <div class="q-ltop-content">
            <a href="<?php the_permalink(); ?>" class="question-title">
                <?php the_title() ?>
            </a>
        </div>
        <div class="q-lbtm-content">
            
            <div class="question-cat">
                <ul class="question-tags">
                    <?php
                        foreach ($question->qa_tag as $tag) {
                    ?>
                    <li>
                        <a class="q-tag" href="<?php echo get_term_link($tag->term_id, 'qa_tag'); ?> ">
                            <?php echo $tag->name; ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
                
                
               
            </div>
        </div>
    </div><!-- end left content -->
    <div class="col-md-4 col-xs-4 q-right-content">
        <ul class="question-statistic">            
            <li>
                <span class="question-votes">
                    <?php echo $question->et_vote_count ?>
                </span>
                <?php _e("Marks",ET_DOMAIN) ?>
            </li>
        </ul>
    </div><!-- end right content -->
</li>