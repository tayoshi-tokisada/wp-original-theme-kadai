<form action="<?php echo home_url("/");?>" method="get" class="p-search-form">
  <input type="text" name="s" placeholder="検索する" value="<?php the_search_query();?>">
  <button type="submit"><span>検索</span></button>
</form>