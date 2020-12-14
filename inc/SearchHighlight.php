<?php
namespace nucssa_theme;

class SearchHighlight {
  public static function titleHighlight($text) {
    if (is_search() && ! empty($s = get_search_query())) {
      $keys = implode('|', explode(' ', $s));
      $text = preg_replace('/(' . $keys . ')/iu', '<span class="search-highlight">\0</span>', $text);
    }
    return $text;
  }
  public static function contentHighlight($text) {
    if (is_search() && !empty($s = get_search_query())) {
      $keys = implode('|', explode(' ', $s));
      $text = preg_replace('/(' . $keys . ')/iu', '<span class="search-highlight">\0</span>', $text);
      // TODO: replace 8 words back and ahead with ...
      // $text = preg_replace("/((?<=$keys)\w*\b(\W+\w+){3}|(\b\w+\W+){2}\w*$keys)/iu", '...', $text);
      // $text = preg_replace("/\w{8}($keys)\w{8}/iu", '...<span class="search-highlight">\0</span>...', $text);
    }
    return $text;
  }
}
