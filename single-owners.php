<?php get_header(); ?>
<div class="container py-5">
    <?php while(have_posts()): the_post(); ?>
        <div class="owner-details">
            <div class="row">
                <div class="col-md-3">
                    <?php the_post_thumbnail('medium', ['class'=>'img-fluid rounded']); ?>
                </div>
                <div class="col-md-9">
                    <h2><?php echo get_post_meta(get_the_ID(), 'owner_name_en', true); ?> 
                        (<?php echo get_post_meta(get_the_ID(), 'owner_name_bn', true); ?>)</h2>
                    <p><strong>Father’s Name:</strong> <?php echo get_post_meta(get_the_ID(), 'father_name_en', true); ?> 
                        (<?php echo get_post_meta(get_the_ID(), 'father_name_bn', true); ?>)</p>
                    <p><strong>Spouse:</strong> <?php echo get_post_meta(get_the_ID(), 'spouse_name', true); ?></p>
                    <p><strong>Property:</strong> <?php echo get_post_meta(get_the_ID(), 'property_details', true); ?></p>
                    <p><strong>NID:</strong> <?php echo get_post_meta(get_the_ID(), 'nid_no', true); ?></p>
                    <p><strong>WhatsApp:</strong> <?php echo get_post_meta(get_the_ID(), 'whatsapp_no', true); ?></p>
                    <p><strong>Email:</strong> <?php echo get_post_meta(get_the_ID(), 'email', true); ?></p>
                    <p><strong>Profession:</strong> <?php echo get_post_meta(get_the_ID(), 'profession', true); ?></p>
                    <p><strong>Service Location:</strong> <?php echo get_post_meta(get_the_ID(), 'service_location', true); ?></p>
                    <p><strong>Present Address:</strong> <?php echo get_post_meta(get_the_ID(), 'present_address', true); ?></p>
                    <p><strong>Permanent Address:</strong> <?php echo get_post_meta(get_the_ID(), 'permanent_address', true); ?></p>
                    <p><strong>Blood Group:</strong> <?php echo get_post_meta(get_the_ID(), 'blood_group', true); ?></p>

                    <h4>Related Buildings:</h4>
                    <ul>
                        <?php 
                        $related = get_post_meta(get_the_ID(), 'related_buildings', true);
                        if($related){
                            foreach($related as $bid){
                                echo "<li><a href='".get_permalink($bid)."'>".get_the_title($bid)."</a></li>";
                            }
                        } else {
                            echo "<li>No related building.</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>
