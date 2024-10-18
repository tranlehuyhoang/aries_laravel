
<?php
$args = [
  "post_type" => "post",
  "orderby" => "ID",
  "post_status" => "publish",
  "order" => "DESC",
  "posts_per_page" => 11, // Lấy tối đa 2 bài viết
  "offset" => 5,
];

$posts = get_posts($args);

if ($posts) {
  $first_post = $posts[0];
  $second_post = $posts[1];
  $third_post = $posts[2];
  $fourth_post = $posts[3];
  $fifth_post = $posts[4];
  $sixth_post = $posts[5];


}
?>

<section id="ds_tintuc_bottom">
	<div class="container">
        <div class="main-item main1">
            <div class="main-item-child main1_1">
                <img src=" <?php echo get_the_post_thumbnail_url($first_post->ID, 'thumbnail');  ?>" alt="" sizes="" srcset="">
                <div class="text1">
                    <h4>
    <?php
                   echo  $first_post->post_title;
                   ?>
                    </h4>
                    <p>
                        <?php
                   echo  $first_post->post_content ;
                   ?>
                    </p>
                    <div style="border-top: 1px solid rgba(19, 74, 155, 0.4)">

                    </div>
                    <div class="footer_main1">
                        <div class="left_footer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.247 22.7134H13.9225H10.0788H4.75427C2.36769 22.7134 0.524587 20.8161 0.831771 18.6844L1.72182 12.5521H10.0788H13.9225H22.2795L23.1695 18.6844C23.4767 20.8161 21.6336 22.7134 19.247 22.7134Z"
                                    fill="#134A9B" />
                                <path
                                    d="M19.247 1.28516H13.9225H10.0788H4.75427C2.36769 1.28516 0.524587 3.18239 0.831771 5.31412L1.72182 11.4464H10.0788H13.9225H22.2795L23.1695 5.31412C23.4767 3.18239 21.6336 1.28516 19.247 1.28516Z"
                                    fill="#134A9B" />
                                <path
                                    d="M19.247 21.6089H13.9225H10.0788H4.75427C2.36769 21.6089 0.524587 19.7116 0.831771 17.5799L1.72182 11.4476H10.0788H13.9225H22.2795L23.1695 17.5799C23.4767 19.7116 21.6336 21.6089 19.247 21.6089Z"
                                    fill="#0079E7" />
                                <ellipse cx="5.81641" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="5.81641" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="12.001" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="12.001" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="18.1846" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="18.1846" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="5.81641" cy="8.59462" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="5.81641" cy="18.4878" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="12.001" cy="8.59462" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="12.001" cy="18.4878" rx="1.62793" ry="1.03652" fill="white" />
                            </svg> <span><?php echo  get_the_time('d/m/Y', $first_post->ID)?></span>
                        </div>
                        <div class="right_footer">
                            <p>Chi tiết</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-item-child main1_2">
                <img src="  <?php echo get_the_post_thumbnail_url($second_post->ID, 'thumbnail');  ?>" alt="" sizes="" srcset="">
                <div class="text1">
                    <h4>
    <?php
                   echo  $second_post->post_title;
                   ?>
                    </h4>
                    <p>
                        <?php
                   echo  $second_post->post_content ;
                   ?>
                    </p>
                    <div style="border-top: 1px solid rgba(19, 74, 155, 0.4)">

                    </div>
                    <div class="footer_main1">
                        <div class="left_footer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.247 22.7134H13.9225H10.0788H4.75427C2.36769 22.7134 0.524587 20.8161 0.831771 18.6844L1.72182 12.5521H10.0788H13.9225H22.2795L23.1695 18.6844C23.4767 20.8161 21.6336 22.7134 19.247 22.7134Z"
                                    fill="#134A9B" />
                                <path
                                    d="M19.247 1.28516H13.9225H10.0788H4.75427C2.36769 1.28516 0.524587 3.18239 0.831771 5.31412L1.72182 11.4464H10.0788H13.9225H22.2795L23.1695 5.31412C23.4767 3.18239 21.6336 1.28516 19.247 1.28516Z"
                                    fill="#134A9B" />
                                <path
                                    d="M19.247 21.6089H13.9225H10.0788H4.75427C2.36769 21.6089 0.524587 19.7116 0.831771 17.5799L1.72182 11.4476H10.0788H13.9225H22.2795L23.1695 17.5799C23.4767 19.7116 21.6336 21.6089 19.247 21.6089Z"
                                    fill="#0079E7" />
                                <ellipse cx="5.81641" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="5.81641" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="12.001" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="12.001" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="18.1846" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="18.1846" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="5.81641" cy="8.59462" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="5.81641" cy="18.4878" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="12.001" cy="8.59462" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="12.001" cy="18.4878" rx="1.62793" ry="1.03652" fill="white" />
                            </svg> <span><?php echo  get_the_time('d/m/Y', $first_post->ID)?></span>
                        </div>
                        <div class="right_footer">
                            <p>Chi tiết</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-item-child main1_3">
                <img src="  <?php echo get_the_post_thumbnail_url($third_post->ID, 'thumbnail');  ?>" alt="">
                <div class="text1">
                    <h4>
    <?php
                   echo  $third_post->post_title;
                   ?>
                    </h4>
                    <p>
                        <?php
                   echo  $third_post->post_content ;
                   ?>
                    </p>
                    <div style="border-top: 1px solid rgba(19, 74, 155, 0.4)">

                    </div>
                    <div class="footer_main1">
                        <div class="left_footer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.247 22.7134H13.9225H10.0788H4.75427C2.36769 22.7134 0.524587 20.8161 0.831771 18.6844L1.72182 12.5521H10.0788H13.9225H22.2795L23.1695 18.6844C23.4767 20.8161 21.6336 22.7134 19.247 22.7134Z"
                                    fill="#134A9B" />
                                <path
                                    d="M19.247 1.28516H13.9225H10.0788H4.75427C2.36769 1.28516 0.524587 3.18239 0.831771 5.31412L1.72182 11.4464H10.0788H13.9225H22.2795L23.1695 5.31412C23.4767 3.18239 21.6336 1.28516 19.247 1.28516Z"
                                    fill="#134A9B" />
                                <path
                                    d="M19.247 21.6089H13.9225H10.0788H4.75427C2.36769 21.6089 0.524587 19.7116 0.831771 17.5799L1.72182 11.4476H10.0788H13.9225H22.2795L23.1695 17.5799C23.4767 19.7116 21.6336 21.6089 19.247 21.6089Z"
                                    fill="#0079E7" />
                                <ellipse cx="5.81641" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="5.81641" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="12.001" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="12.001" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="18.1846" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="18.1846" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="5.81641" cy="8.59462" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="5.81641" cy="18.4878" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="12.001" cy="8.59462" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="12.001" cy="18.4878" rx="1.62793" ry="1.03652" fill="white" />
                            </svg> <span><?php echo  get_the_time('d/m/Y', $first_post->ID)?></span>
                        </div>
                        <div class="right_footer">
                            <p>Chi tiết</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-item-child main1_4">
                <img src="  <?php echo get_the_post_thumbnail_url($fourth_post->ID, 'thumbnail');  ?>" alt="" sizes="" srcset="">
                <div class="text1">
                    <h4>
    <?php
                   echo  $fourth_post->post_title;
                   ?>
                    </h4>
                    <p>
                        <?php
                   echo  $fourth_post->post_content ;
                   ?>
                    </p>
                    <div style="border-top: 1px solid rgba(19, 74, 155, 0.4)">

                    </div>
                    <div class="footer_main1">
                        <div class="left_footer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.247 22.7134H13.9225H10.0788H4.75427C2.36769 22.7134 0.524587 20.8161 0.831771 18.6844L1.72182 12.5521H10.0788H13.9225H22.2795L23.1695 18.6844C23.4767 20.8161 21.6336 22.7134 19.247 22.7134Z"
                                    fill="#134A9B" />
                                <path
                                    d="M19.247 1.28516H13.9225H10.0788H4.75427C2.36769 1.28516 0.524587 3.18239 0.831771 5.31412L1.72182 11.4464H10.0788H13.9225H22.2795L23.1695 5.31412C23.4767 3.18239 21.6336 1.28516 19.247 1.28516Z"
                                    fill="#134A9B" />
                                <path
                                    d="M19.247 21.6089H13.9225H10.0788H4.75427C2.36769 21.6089 0.524587 19.7116 0.831771 17.5799L1.72182 11.4476H10.0788H13.9225H22.2795L23.1695 17.5799C23.4767 19.7116 21.6336 21.6089 19.247 21.6089Z"
                                    fill="#0079E7" />
                                <ellipse cx="5.81641" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="5.81641" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="12.001" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="12.001" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="18.1846" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="18.1846" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="5.81641" cy="8.59462" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="5.81641" cy="18.4878" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="12.001" cy="8.59462" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="12.001" cy="18.4878" rx="1.62793" ry="1.03652" fill="white" />
                            </svg> <span><?php echo  get_the_time('d/m/Y', $first_post->ID)?></span>
                        </div>
                        <div class="right_footer">
                            <p>Chi tiết</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-item-child main1_5">
                <img src="  <?php echo get_the_post_thumbnail_url($fifth_post->ID, 'thumbnail');  ?>" alt="" sizes="" srcset="">
                <div class="text1">
                    <h4>
    <?php
                   echo  $fifth_post->post_title;
                   ?>
                    </h4>
                    <p>
                        <?php
                   echo  $fifth_post->post_content ;
                   ?>
                    </p>
                    <div style="border-top: 1px solid rgba(19, 74, 155, 0.4)">

                    </div>
                    <div class="footer_main1">
                        <div class="left_footer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.247 22.7134H13.9225H10.0788H4.75427C2.36769 22.7134 0.524587 20.8161 0.831771 18.6844L1.72182 12.5521H10.0788H13.9225H22.2795L23.1695 18.6844C23.4767 20.8161 21.6336 22.7134 19.247 22.7134Z"
                                    fill="#134A9B" />
                                <path
                                    d="M19.247 1.28516H13.9225H10.0788H4.75427C2.36769 1.28516 0.524587 3.18239 0.831771 5.31412L1.72182 11.4464H10.0788H13.9225H22.2795L23.1695 5.31412C23.4767 3.18239 21.6336 1.28516 19.247 1.28516Z"
                                    fill="#134A9B" />
                                <path
                                    d="M19.247 21.6089H13.9225H10.0788H4.75427C2.36769 21.6089 0.524587 19.7116 0.831771 17.5799L1.72182 11.4476H10.0788H13.9225H22.2795L23.1695 17.5799C23.4767 19.7116 21.6336 21.6089 19.247 21.6089Z"
                                    fill="#0079E7" />
                                <ellipse cx="5.81641" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="5.81641" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="12.001" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="12.001" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="18.1846" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="18.1846" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="5.81641" cy="8.59462" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="5.81641" cy="18.4878" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="12.001" cy="8.59462" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="12.001" cy="18.4878" rx="1.62793" ry="1.03652" fill="white" />
                            </svg> <span><?php echo  get_the_time('d/m/Y', $first_post->ID)?></span>
                        </div>
                        <div class="right_footer">
                            <p>Chi tiết</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-item-child main1_6">
                <img src="<?php echo get_the_post_thumbnail_url($sixth_post->ID, 'thumbnail');  ?>" alt="">
                <div class="text1">
                    <h4>
    <?php
                   echo  $sixth_post->post_title;
                   ?>
                    </h4>
                    <p>
                        <?php
                   echo  $sixth_post->post_content ;
                   ?>
                    </p>
                    <div style="border-top: 1px solid rgba(19, 74, 155, 0.4)">

                    </div>
                    <div class="footer_main1">
                        <div class="left_footer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.247 22.7134H13.9225H10.0788H4.75427C2.36769 22.7134 0.524587 20.8161 0.831771 18.6844L1.72182 12.5521H10.0788H13.9225H22.2795L23.1695 18.6844C23.4767 20.8161 21.6336 22.7134 19.247 22.7134Z"
                                    fill="#134A9B" />
                                <path
                                    d="M19.247 1.28516H13.9225H10.0788H4.75427C2.36769 1.28516 0.524587 3.18239 0.831771 5.31412L1.72182 11.4464H10.0788H13.9225H22.2795L23.1695 5.31412C23.4767 3.18239 21.6336 1.28516 19.247 1.28516Z"
                                    fill="#134A9B" />
                                <path
                                    d="M19.247 21.6089H13.9225H10.0788H4.75427C2.36769 21.6089 0.524587 19.7116 0.831771 17.5799L1.72182 11.4476H10.0788H13.9225H22.2795L23.1695 17.5799C23.4767 19.7116 21.6336 21.6089 19.247 21.6089Z"
                                    fill="#0079E7" />
                                <ellipse cx="5.81641" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="5.81641" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="12.001" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="12.001" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="18.1846" cy="5.11024" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="18.1846" cy="14.3968" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="5.81641" cy="8.59462" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="5.81641" cy="18.4878" rx="1.62793" ry="1.03652" fill="white" />
                                <ellipse cx="12.001" cy="8.59462" rx="1.62793" ry="0.882812" fill="#B6C7E0" />
                                <ellipse cx="12.001" cy="18.4878" rx="1.62793" ry="1.03652" fill="white" />
                            </svg> <span><?php echo  get_the_time('d/m/Y', $first_post->ID)?></span>
                        </div>
                        <div class="right_footer">
                            <p>Chi tiết</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.38672 1.00082L1.38754 6.00001L6.38672 10.9992" stroke="#134A9B" />
        </svg>
        <a href="" class="pagination-number-1">1</a>
        <a href="" class="pagination-number">2</a>
        <svg width="24" height="4" viewBox="0 0 24 4" fill="none" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="2.38674" cy="2" rx="2.00002" ry="2" fill="#134A9B" />
            <ellipse cx="11.7188" cy="2" rx="2.00002" ry="2" fill="#134A9B" />
            <ellipse cx="21.0547" cy="2" rx="2.00002" ry="2" fill="#134A9B" />
        </svg>
        <a href="" class="pagination-number">10</a>
        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.05078 1.00082L6.04996 6.00001L1.05078 10.9992" stroke="#134A9B" />
        </svg>
    </div>
</section>
