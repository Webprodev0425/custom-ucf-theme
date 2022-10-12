<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
	<div class="container mt-4 mt-sm-5 mb-5 pb-sm-4 flex">
        <div class = "left_site_bar">
            <p>Application Deadline</p>
            <p>March 15, 2022</p>
        </div>
        <div class = "page_body">
            <?php the_content(); ?>
        </div>
        <div class = "right_side_bar">
            <h3>National Science Foundation</h3>
            <p>Research Experiences for Undergradiates</p>
            <ul>
                <li>10-week summer research for 10 students</li>
                <li>$6,000 stipend</li>
            </ul>
        </div>		
	</div>
</article>

<?php get_footer(); ?>
