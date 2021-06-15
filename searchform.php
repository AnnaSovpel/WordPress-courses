<?php get_header();?>
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' )?>" class="form-group">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="поиск" class="form-control" value="<?php echo get_search_query() ?>" name="s" id="s" />
    </form>
<?php get_footer();?>
