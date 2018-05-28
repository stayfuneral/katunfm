<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >

    <input class="form-control" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Что ищем?" />
    <button type="submit" id="searchsubmit" class="btn btn-lg btn-info mt-2 mb-2">Искать!</button>
</form>