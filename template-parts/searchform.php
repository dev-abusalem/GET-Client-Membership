<form class="rd-search rd-search-classic" action="<?php echo home_url('/') ?>" method="get">
    <div class="form-wrap">
        <label class="form-label" for="rd-search-form-input-1">Search...</label>
        <input class="form-input" value="<?php
                                            echo get_search_query()
                                            ?>" id="rd-search-form-input-1" type="search" name="s" autocomplete="off">
    </div>
    <button class="rd-search-submit" type="submit"></button>
</form>