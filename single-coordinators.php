<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
	<div class="container mt-4 mt-sm-5 mb-5 pb-sm-4 flex">
        <div class = "left_site_bar">
            <h5>Application Deadline</h5>
            <p>March 15, 2022</p>
            <a href="Application Packet 2022.pdf"><button class="button-primary">Apply Now</button></a>
            <h5>Contact</h5>
            <p>
                <a href="mailto:nsfreunano@ucf.edu">nsfreunano@ucf.edu</a>
                <a href="https://nano.ucf.edu/faculty/gesquiere.php">Andre Gesquiere</a>
                <a href="https://mse.ucf.edu/nanobiomaterials/">Sudipta Seal</a>
            </p>
            <h5>Flyer</h5>
            <p>
                <a target="_blank" href="../2022 flyer.pdf">REU 2022 Flyer</a>
            </p>
        </div>
		<div class = "normal_page_body">
            <div class = "person">
                <?php
                    $coordinator_name = get_field('coordinator_name');
                    $coordinator_image = get_field('coordinator_image');
                    $coordinator_role = get_field('coordinator_role');
                    $coordinator_email = get_field('coordinator_email');
                    $coordinator_description = get_field('coordinator_description');
                    $research_focus = get_field('research_focus');
                ?>
                <div class = "person_image">
                    <img src = "<?php echo $coordinator_image['url']; ?>">
                </div>
                <div class = "person_data">
                    <?php if(!empty($coordinator_name)):?>
                        <p class = "coordinator_name"><?php echo $coordinator_name; ?></p>
                    <?php endif; ?>
                    <?php if(!empty($coordinator_role)):?>
                        <p class = "coordinator_role"><?php echo $coordinator_role; ?></p>
                    <?php endif; ?>
                    <?php if(!empty($coordinator_email)):?>
                        <p class = "coordinator_email"><?php echo $coordinator_email; ?></p>
                    <?php endif; ?>
                    <?php if(!empty($coordinator_description)):?>
                        <div class = "coordinator_description"><?php echo $coordinator_description; ?></div>
                    <?php endif; ?>
                    <?php if(!empty($research_focus)):?>
                        <div class = "research_focus"><?php echo $research_focus; ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
	</div>
</article>

<?php get_footer(); ?>

