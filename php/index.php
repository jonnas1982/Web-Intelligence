<?php
    //require 'settings.php';
    //require 'Compare.class.php';
    include 'getContent.class.php';

    //$compare = new Compare;
    //$jaccard = $compare->check_dub('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt tortor at leo maximus, id venenatis augue pulvinar. Aliquam et urna eleifend, tincidunt sem nec, rhoncus lacus. Suspendisse tempus aliquam diam, vitae pharetra sapien elementum et. Praesent id velit at metus pulvinar volutpat vitae ut velit. Sed ante lacus, vestibulum ac blandit nec, ultrices ac augue. Nulla sit amet vehicula nunc. Vivamus eget urna arcu. Praesent quam lectus, dignissim eget auctor eget, rutrum eget est. Praesent tincidunt elementum sagittis. Praesent nulla turpis, pellentesque posuere tincidunt eget, pretium vel quam. Proin semper justo in felis imperdiet, eu feugiat lectus facilisis. Donec luctus tortor et quam semper, quis tempus dolor auctor. Phasellus tellus ligula, aliquet eu vestibulum id, auctor in felis. Pellentesque eu risus quis turpis dictum efficitur. Nullam auctor nunc tortor, a dignissim arcu cursus et. Aenean mattis tincidunt magna sit amet interdum. Vestibulum sollicitudin nisl metus, quis luctus nunc accumsan posuere. Vivamus ligula lacus, consectetur eu turpis et, suscipit efficitur magna. Sed pellentesque luctus ultricies. Nunc non nibh massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dapibus, elit eu fermentum ornare, sapien purus pretium felis, eget tincidunt eros nisi vel nisl. In hac habitasse platea dictumst. Donec eget mi eu metus feugiat commodo. Maecenas elementum efficitur purus, eget ultricies nulla fermentum ac. Morbi consequat elementum leo eget porta. Pellentesque enim velit, condimentum in commodo quis, porttitor non augue. Etiam auctor felis nisi, vel ornare odio feugiat eu. Nam ut felis nec libero mattis placerat. Pellentesque luctus lectus vitae ullamcorper lacinia. Curabitur laoreet pellentesque pulvinar. Suspendisse felis mi, auctor id orci eget, tincidunt ultrices nunc. Duis eget justo eu magna interdum maximus. Fusce sit amet est dignissim, consectetur odio a, condimentum lectus. Integer ut arcu eu erat venenatis imperdiet. Vivamus malesuada pharetra est. Praesent porttitor, turpis ac bibendum pretium, purus tellus vulputate nibh, et faucibus justo lectus a massa. Sed a risus pellentesque, sagittis arcu sit amet, posuere risus. Vestibulum gravida placerat scelerisque. Donec ac purus ac nulla vulputate ornare ut vitae diam. Mauris ut mauris sapien. Nam at auctor est. Vestibulum sodales est tristique enim viverra iaculis. Aenean maximus libero at odio rhoncus sagittis. Donec vel pretium sapien, et laoreet arcu. Nunc leo mauris, finibus sit amet dolor vel, congue pretium eros. Vestibulum sit amet turpis a urna placerat bibendum. Suspendisse malesuada orci iaculis, consequat mauris eu, iaculis ante. Maecenas posuere ultrices malesuada. Nullam lacinia nulla euismod sapien dignissim tempus. Maecenas ex mi, pharetra id sem eu, congue gravida massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi egestas malesuada libero, vel imperdiet arcu aliquet et. Pellentesque pellentesque eget nunc id lacinia. Suspendisse quis lobortis odio, vel efficitur tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed rutrum libero quis diam ullamcorper placerat. Vivamus nec suscipit erat. Sed vel tortor dolor. Aliquam eget maximus eros, in pulvinar ipsum. Nulla urna arcu, sodales pellentesque sapien malesuada, hendrerit fringilla eros. Ut accumsan odio nec felis sollicitudin iaculis. Curabitur ut sem lectus. Ut pulvinar condimentum elit, et tempor purus rutrum lobortis. Sed quis ante non nisl feugiat imperdiet. Donec vel lacus vel felis rhoncus egestas sit amet vel eros. Integer aliquet pharetra elit, efficitur aliquam diam tempus ac. Nunc ac eros sed eros vulputate imperdiet eu vel augue. Sed magna risus, efficitur non purus in, iaculis bibendum sem. Etiam egestas ligula vitae erat porta, et malesuada massa venenatis. Donec felis magna, varius id consectetur quis, fringilla luctus quam. Sed semper enim lectus, sed interdum elit pretium nec. Integer condimentum tempus magna sit amet tempus. Nullam congue nunc ut vulputate lobortis. Mauris pulvinar lacinia quam in pharetra. Nunc iaculis ante vel luctus sollicitudin. Donec feugiat porttitor lectus, id dignissim eros sollicitudin ut. Sed ex nibh, scelerisque eget laoreet eget, luctus ullamcorper arcu. Maecenas arcu lorem, rhoncus blandit ante tempus, porttitor vulputate ligula. Phasellus sed nisi at neque consequat euismod. Ut vel augue a eros porttitor euismod a sit amet eros. Fusce ac arcu eget metus consequat bibendum. In blandit dui nec nisi tristique, id pulvinar enim egestas. Nunc at lorem in velit fringilla porta. Nullam tempus, dolor varius vestibulum tempus, felis nulla commodo nunc, a vestibulum leo magna eget quam. Quisque ut tellus blandit, rutrum ipsum in, porta justo. Phasellus diam eros, rutrum eget elit vel, fermentum lobortis massa. Morbi sit amet dolor sed metus fermentum mattis nec ac quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque dapibus mi eget tortor ultricies, in vulputate tortor congue. Vivamus porta, lectus non ultrices convallis, ipsum magna malesuada purus, vel interdum ligula lorem a purus. Nulla euismod varius gravida. Aenean aliquet tempor tempor. Nulla bibendum pharetra sagittis. Cras consequat felis in odio fringilla elementum. Ut tincidunt mauris vehicula lacus fermentum, a ornare felis aliquam. Fusce ac mauris blandit quam sagittis facilisis vel in erat. Vestibulum eu vulputate nibh. Cras ornare justo mi, a malesuada massa maximus quis. Nunc convallis dictum nisi, vel pretium tortor tempor eget. Nulla faucibus efficitur turpis, ut malesuada erat scelerisque sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque in felis volutpat, tincidunt enim et, lacinia orci. Duis mattis interdum aliquam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sit amet convallis urna. Aliquam ultrices in risus sed faucibus. Aenean ac felis ut urna cursus euismod id sit amet nibh. Sed sit amet mauris fringilla, aliquam nulla nec, volutpat velit. Fusce est tortor, porttitor ut ipsum malesuada, molestie sodales lectus. Suspendisse id nibh risus. Cras ultricies ligula nec massa tincidunt suscipit. Nullam id tortor vel neque ultricies fringilla vel id neque. Pellentesque vestibulum varius lorem, sit amet accumsan nibh sagittis at. Maecenas vehicula feugiat augue eget suscipit. Proin sagittis ligula tellus, at tempor sapien tempus sit amet. Maecenas nec tincidunt leo. Pellentesque condimentum facilisis lacinia. Aliquam erat volutpat. Nullam rutrum lorem quis justo gravida, nec efficitur ligula convallis. Proin aliquet congue mauris ut lobortis. Ut nec sapien sagittis, varius. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio leo, imperdiet et nibh ac, pellentesque gravida tortor. Nam efficitur ante in neque tincidunt ornare. Aliquam non mi sit amet libero mattis volutpat tempor ut dolor. Sed nec ligula tortor. Nullam eu ligula non eros pretium accumsan sed in ante. Cras tempor nibh quis suscipit varius. Ut aliquam mi eget ante accumsan mollis. Cras et elit pulvinar, dictum quam eu, placerat erat. Mauris eu sollicitudin ante, nec eleifend sapien. Cras felis risus, suscipit sit amet neque quis, condimentum cursus magna. Cras eros lorem, porta commodo augue luctus, malesuada laoreet erat. Morbi vehicula ligula vel massa lobortis rhoncus. Curabitur laoreet ligula in lacus molestie, ac posuere justo ultrices. Donec et velit vel libero finibus gravida fermentum mollis tortor. Sed tincidunt ipsum sit amet venenatis feugiat. Donec ipsum lacus, feugiat vehicula placerat et, varius at urna. Vestibulum aliquet, eros sed tempus finibus, diam lorem ullamcorper quam, ut aliquet odio libero eu leo. Donec et finibus lacus. Phasellus lobortis semper feugiat. Suspendisse gravida viverra venenatis. Sed sed fermentum nulla. Nullam justo velit, auctor nec dui ac, vulputate ultrices mauris. Pellentesque volutpat diam diam, in dapibus ante bibendum eget. Fusce at eleifend risus, eu imperdiet lectus. Sed ultrices nibh eget nunc venenatis consectetur. Suspendisse feugiat urna eget leo congue, sit amet suscipit urna varius. Integer rhoncus vitae orci blandit suscipit. Donec finibus arcu id finibus tincidunt. Nullam ut sollicitudin elit. Phasellus hendrerit enim lectus, interdum scelerisque orci volutpat sodales. Donec turpis urna, scelerisque ac lacus ut, euismod gravida lorem. Integer vel fringilla dui, ac iaculis lectus. Nunc vel tellus mattis, placerat odio non, porttitor mi. Vivamus sit amet pellentesque ligula. Duis sed ultrices quam, elementum interdum est. Donec scelerisque mi at magna luctus, eu vulputate tellus feugiat. Duis vehicula nisi ac gravida mollis. Nullam sagittis volutpat arcu id ultrices. Proin pharetra tortor faucibus arcu auctor, ac lacinia risus consectetur. Suspendisse potenti. Phasellus quis mollis est. Vivamus massa enim, pellentesque ac augue sed, dictum feugiat nisi. Phasellus libero nunc, malesuada ut tellus eu, auctor egestas urna. Nulla iaculis aliquet scelerisque. Donec rutrum magna ac efficitur mattis. Pellentesque fermentum tempus diam, nec euismod libero lobortis vel. Duis vestibulum vitae nulla sed tincidunt. Fusce sodales, elit ac sagittis dignissim, nibh nibh convallis ipsum, non cursus ex sapien id sapien. Curabitur sit amet rhoncus neque. Nullam arcu nisi, sodales nec risus ac, pellentesque facilisis lorem. Integer a scelerisque erat, a convallis justo. Sed mollis erat lacus, vitae feugiat augue congue congue. In laoreet lacus ut nulla commodo sollicitudin. Etiam pulvinar fermentum finibus. Nulla commodo consequat arcu, quis dictum velit malesuada placerat. Etiam bibendum magna ante, vitae finibus ipsum interdum eget. Maecenas et justo non erat varius varius ut sit amet dolor. Nulla eget tincidunt eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec vulputate auctor diam at maximus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum rutrum massa ac massa dictum, eget dictum diam euismod. Vestibulum iaculis, quam sit amet eleifend lobortis, ipsum orci efficitur risus, nec dictum augue sapien sed neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed venenatis non enim in luctus. Curabitur ut nibh mattis, sollicitudin dui vel, vehicula orci. Ut vitae dui erat. Duis vel nibh et ante vulputate porttitor. Nunc dignissim, tortor et lobortis dictum, nunc ligula porttitor dui, a porttitor neque lacus eu leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec at justo a arcu faucibus maximus. Vestibulum pellentesque arcu erat, ac aliquet dolor mollis nec. Integer sed suscipit lectus. Donec ut nulla tristique, efficitur mauris aliquam, ultrices quam. Donec sollicitudin feugiat interdum. In et bibendum velit, ut vulputate tortor. Suspendisse sed ante at justo dignissim ullamcorper. Sed quis pharetra ipsum. Suspendisse ac urna erat. Ut sem diam, semper sit amet placerat non, pharetra at eros. Praesent odio ipsum, volutpat vitae ante ut, cursus feugiat dolor. Praesent ut fermentum arcu. Sed hendrerit non tortor et consectetur. Sed at porta felis. Vivamus ornare eros non mauris sagittis, ultrices sodales dui sagittis. Fusce vel tortor rhoncus, sollicitudin nisi nec, placerat quam. Nulla mattis ac sem sit amet viverra. Curabitur convallis posuere pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et nisi vitae nulla vehicula euismod vel nec velit. Quisque nec eros non est auctor cursus in sed felis. Nunc nec ante a nulla pellentesque suscipit. Nulla volutpat fermentum consequat. Etiam id hendrerit dolor. Cras pulvinar fermentum iaculis. Fusce hendrerit bibendum nisi vitae luctus. Pellentesque ornare porta viverra. Nullam dui nisl, tristique ac lobortis at, facilisis non est. Fusce urna nisl, aliquet at maximus a, interdum convallis mauris. Nulla ullamcorper quam sit amet nulla fermentum viverra. Aliquam turpis urna, egestas vel elementum ac, aliquam pretium lacus. Sed et leo sit amet nisl volutpat lacinia. Quisque turpis ante, interdum nec elit in, placerat iaculis sem. Aliquam at odio ut metus imperdiet sagittis quis ac lacus. Cras tincidunt, nunc in porta ultricies, ex tellus blandit lacus, non feugiat nunc ipsum id erat. Praesent luctus porttitor efficitur. Sed et sollicitudin odio, euismod aliquam magna. Nulla hendrerit tempus turpis, ac viverra est tristique at. Sed nunc urna, facilisis a fermentum suscipit, tempus eget orci. Aliquam pharetra viverra dui vel finibus. Nunc lorem mauris, sollicitudin quis porta id, mollis ac mi. Maecenas facilisis finibus ex vitae feugiat. Morbi ac est pulvinar lectus vehicula sagittis. Ut dictum, ipsum sit amet accumsan vestibulum, enim augue bibendum ligula, eu pellentesque nulla velit interdum ligula. Aenean ut urna ut orci varius dapibus. Ut libero eros, commodo eget mauris a, molestie lacinia tellus. Pellentesque consequat vel ipsum sed tristique. Curabitur mattis porttitor lorem nec pharetra. Donec a urna vitae mi mattis maximus. Sed id mauris leo. Cras vitae euismod justo, sit amet laoreet nisi. Quisque ut justo et lacus euismod placerat. Curabitur accumsan eros ut porttitor consectetur. Maecenas sit amet accumsan tortor. Quisque neque nunc, accumsan ac nulla quis, venenatis tristique ante. Donec nec risus tortor. Nullam.')

    //$jaccard = $compare->check_dub('aadspifjpaidsjfpasoijdf', 'aadspifjppasoijdf');
    $get = new getContent(['#','linkedin', 'google', 'facebook', 'youtube', 'mailto:', 'tel:', 'twitter', 'sitemap', 'cookies', '../']);
    $seeds = ['https://google.com'];
    $index = [];
    /*foreach($seeds AS $seed)
    {
        $index = $index + $get->get_url_from_website($seed);
    }*/
    $index = $get->get_url_from_website('https://google.com', 'studerende.dk');
    echo "<pre>";
    echo "start";
    //$text = explode(" ", $index['https://www.blogger.com/?tab=wj']['text']);
    //$new_text = [];
    print_r($get->create_inverted_index($index));
    echo "</pre>";
?>
<h1>Test</h1>
