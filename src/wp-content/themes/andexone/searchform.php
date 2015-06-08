<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <!--<input type="hidden" value="post" name="post_type" id="post_type" />-->
    <label>
        <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
        <input type="search" class="search-field" placeholder="<?php echo _e('Search ...', 'andexone') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" size="15" />
    </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button') ?>" />
</form>