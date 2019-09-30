<?php
require 'simplehtmldom_1_9/simple_html_dom.php';
require 'PorterStemmer.class.php';
class getContent
{
    private $ignore;

    function __construct($ignore)
    {
        $this->ignore = $ignore;
    }
    
    public function is_ignore($url)
    {
        foreach($this->ignore AS $i)
        {
            if (strpos($url, $i) !== false) {
                return true;
            }
        }
    }

    public function create_inverted_index($pages)
    {
        $inverted_index = [];
        $texts = [];
        $x = 0;
        foreach($pages AS $page)
        {
            array_push($texts, $page['text']);
        }
        foreach($texts AS $text)
        {
            $x += 1;
            $words = explode(' ', $text);
            foreach($words AS $word)
            {
                if (in_array($word, $inverted_index))
                {
                    $inverted_index[$word] = $inverted_index[$word] . ', ' . $x;
                }
                else 
                {
                    $inverted_index[$word] = $x;
                }
            }
        }
        return $inverted_index;
    }

    public function remove_stop_words($text)
    {
        $words = ["a", "about", "above", "after", "again", "against", "all", "am", "an", "and", "any", "are", "aren't", "as", "at", "be", "because", "been", "before", "being", "below", "between", "both", "but", "by", "can't", "cannot", "could", "couldn't", "did", "didn't", "do", "does", "doesn't", "doing", "don't", "down", "during", "each", "few", "for", "from", "further", "had", "hadn't", "has", "hasn't", "have", "haven't", "having", "he", "he'd", "he'll", "he's", "her", "here", "here's", "hers", "herself", "him", "himself", "his", "how", "how's", "i", "i'd", "i'll", "i'm", "i've", "if", "in", "into", "is", "isn't", "it", "it's", "its", "itself", "let's", "me", "more", "most", "mustn't", "my", "myself", "no", "nor", "not", "of", "off", "on", "once", "only", "or", "other", "ought", "our", "ours", "ourselves", "out", "over", "own", "same", "shan't", "she", "she'd", "she'll", "she's", "should", "shouldn't", "so", "some", "such", "than", "that", "that's", "the", "their", "theirs", "them", "themselves", "then", "there", "there's", "these", "they", "they'd", "they'll", "they're", "they've", "this", "those", "through", "to", "too", "under", "until", "up", "very", "was", "wasn't", "we", "we'd", "we'll", "we're", "we've", "were", "weren't", "what", "what's", "when", "when's", "where", "where's", "which", "while", "who", "who's", "whom", "why", "why's", "with", "won't", "would", "wouldn't", "you", "you'd", "you'll", "you're", "you've", "your", "yours", "yourself", "yourselves", "af", "alle", "andet", "andre", "at", "begge", "da", "de", "den", "denne", "der", "deres", "det", "dette", "dig", "din", "dog", "du", "ej", "eller", "en", "end", "ene", "eneste", "enhver", "et", "fem", "fire", "flere", "fleste", "for", "fordi", "forrige", "fra", "få", "før", "god", "han", "hans", "har", "hendes", "her", "hun", "hvad", "hvem", "hver", "hvilken", "hvis", "hvor", "hvordan", "hvorfor", "hvornår", "i", "ikke", "ind", "ingen", "intet", "jeg", "jeres", "kan", "kom", "kommer", "lav", "lidt", "lille", "man", "mand", "mange", "med", "meget", "men", "mens", "mere", "mig", "ned", "ni", "nogen", "noget", "ny", "nyt", "nær", "næste", "næsten", "og", "op", "otte", "over", "på", "se", "seks", "ses", "som", "stor", "store", "syv", "ti", "til", "to", "tre", "ud", "var", "a", "about", "above", "after", "again", "against", "all", "am", "an", "and", "any", "are", "aren’t", "as", "at", "be", "because", "been", "before", "being", "below", "between", "both", "but", "by", "can’t", "cannot", "could", "couldn’t", "did", "didn’t", "do", "does", "doesn’t", "doing", "don’t", "down", "during", "each", "few", "for", "from", "further", "had", "hadn’t", "has", "hasn’t", "have", "haven’t", "having", "he", "he’d", "he’ll", "he’s", "her", "here", "here’s", "hers", "herself", "him", "himself", "his", "how", "how’s", "i", "i’d", "i’ll", "i’m", "i’ve", "if", "in", "into", "is", "isn’t", "it", "it’s", "its", "itself", "let’s", "me", "more", "most", "mustn’t", "my", "myself", "no", "nor", "not", "of", "off", "on", "once", "only", "or", "other", "ought", "our", "ours", "ourselves", "out", "over", "own", "same", "shan’t", "she", "she’d", "she’ll", "she’s", "should", "shouldn’t", "so", "some", "such", "than", "that", "that’s", "the", "their", "theirs", "them", "themselves", "then", "there", "there’s", "these", "they", "they’d", "they’ll", "they’re", "they’ve", "this", "those", "through", "to", "too", "under", "until", "up", "very", "was", "wasn’t", "we", "we’d", "we’ll", "we’re", "we’ve", "were", "weren’t", "what", "what’s", "when", "when’s", "where", "where’s", "which", "while", "who", "who’s", "whom", "why", "why’s", "with", "won’t", "would", "wouldn’t", "you", "you’d", "you’ll", "you’re", "you’ve", "your", "yours", "yourself", "yourselves", "af", "alle", "andet", "andre", "at", "begge", "da", "de", "den", "denne", "der", "deres", "det", "dette", "dig", "din", "dog", "du", "ej", "eller", "en", "end", "ene", "eneste", "enhver", "et", "fem", "fire", "flere", "fleste", "for", "fordi", "forrige", "fra", "få", "før", "god", "han", "hans", "har", "hendes", "her", "hun", "hvad", "hvem", "hver", "hvilken", "hvis", "hvor", "hvordan", "hvorfor", "hvornår", "i", "ikke", "ind", "ingen", "intet", "jeg", "jeres", "kan", "kom", "kommer", "lav", "lidt", "lille", "man", "mand", "mange", "med", "meget", "men", "mens", "mere", "mig", "ned", "ni", "nogen", "noget", "ny", "nyt", "nær", "næste", "næsten", "og", "op", "otte", "over", "på", "se", "seks", "ses", "som", "stor", "store", "syv", "ti", "til", "to", "tre", "ud", "var"];
        $text = explode(" ", $text);
        $new_text = [];
        for($i = 0; $i <= count($text); $i++)
        {
            if ($text[$i] != "")
            {
                $t = str_replace("\t", '', $text[$i]);
                $t = str_replace("\n", '', $t);
                $t = str_replace(" ", '', $t);
                if(substr($t, -1) == '.')
                {
                    $t = str_replace(".", '', $t);
                }
                $t = str_replace(",", '', $t);
                $t = str_replace("(", '', $t);
                $t = str_replace("-", '', $t);
                $t = str_replace("–", '', $t);
                $t = str_replace("?", '', $t);
                $t = str_replace("+", '', $t);
                $t = str_replace(")", '', $t);
                if($t != "" && !in_array(strtolower($t), $words))
                {
                    array_push($new_text, strtolower(PorterStemmer::Stem($t)));
                }
            }
        }
        return implode($new_text, ' ');
    }

    public function change_url($url)
    {
        if(substr($url, 0, 1) == '/')
        {
            if (strpos($url, '.dk') !== false) {
                return substr($url, 0, strpos($url, ".dk")) . $url;
            }
            elseif (strpos($url, '.com') !== false) {
                return substr($url, 0, strpos($url, ".com")) . $url;
            }
        }
        else {
            return $url;
        }
    }
    
    public function get_url_from_website($url, $domain)
    {
        try
        {
            $urls = [];
            if ($url == "")
            {
                return;
            }
            $current_domain = str_replace('https', '', $url);
            $current_domain = str_replace('http', '', $current_domain);
            $current_domain = str_replace('://', '', $current_domain);
            $current_domain = str_replace('www.', '', $current_domain);
        
            $current_domain = parse_url($url)['path'];
            if($current_domain == $domain)
            {
                sleep(1);
            }
            else {
                $domain = $current_domain;
            }
            if (strpos(parse_url($url)['path'], ".com/"))
            {
                $url = substr(parse_url($url)['path'], 0, strpos(parse_url($url)['path'], ".com/")) . ".com";
            }
            elseif (strpos(parse_url($url)['path'], ".dk/")) {
                $url = substr(parse_url($url)['path'], 0, strpos(parse_url($url)['path'], ".dk/")) . ".dk";
            }
            $html = file_get_html($url);
            foreach($html->find('a') as $e) 
            {
                if($this->is_ignore($e->href) !== true)
                {
                    $current_domain = str_replace('https', '', $url);
                    $current_domain = str_replace('http', '', $current_domain);
                    $current_domain = str_replace('://', '', $current_domain);
                    $current_domain = str_replace('www.', '', $current_domain);
                
                    $current_domain = parse_url($url)['path'];
                    if($current_domain == $domain)
                    {
                        //sleep(1);
                    }
                    else {
                        $domain = $current_domain;
                    }
                    $html = file_get_html($this->change_url($e->href));
                    $urls[$this->change_url($e->href)] = [
                        'html' => htmlspecialchars($html),
                        'text' => $this->remove_stop_words($html->plaintext)
                    ];
                }        
            }
            return $urls;
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}