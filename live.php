<?php
error_reporting(0);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

$a1 = array( 'category'=>"Cricket",
			'name' =>'India vs New Zealand (10 July 2019)',
			'desc'=>'ICC cricket world cup',
			'cookie'=> array( array ( 'domain'=>'value',
									  'name'=>'value',
									  'value'=>'value'
								),
							  array ( 'domain'=>'value',
									  'name'=>'value',
									  'value'=>'value'
							  	)	    
				),
			'playlist'=> array( array ( 'resolution'=>'240',
								        'video'=>'https://live15.hotstar.com/hls/live/2004203/icccwc2019/eng/15mindvr1440000982m01psvn6mma0q10july2019/master_5.m3u8',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
									),
							    array ( 'resolution'=>'360',
									    'video'=>'https://live15.hotstar.com/hls/live/2004203/icccwc2019/eng/15mindvr1440000982m01psvn6mma0q10july2019/master_1.m3u8',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
							  	),
							    array ( 'resolution'=>'480',
									    'video'=>'https://live15.hotstar.com/hls/live/2004203/icccwc2019/eng/15mindvr1440000982m01psvn6mma0q10july2019/master_2.m3u8',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
							  	),
							    array ( 'resolution'=>'720',
									    'video'=>'https://live15.hotstar.com/hls/live/2004203/icccwc2019/eng/15mindvr1440000982m01psvn6mma0q10july2019/master_3.m3u8',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL',
									    'default'
							  	),
							    array ( 'resolution'=>'1080',
									    'video'=>'https://live15.hotstar.com/hls/live/2004203/icccwc2019/eng/15mindvr1440000982m01psvn6mma0q10july2019/master_4.m3u8',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
							  	)
				),
			'requests'=> array( 'https://live15.hotstar.com/hls/live/2004203/icccwc2019/eng/15mindvr1440000982m01psvn6mma0q10july2019/master.m3u8?a=ns&hdnea=st=1562749879~exp=1562753479~acl=/*~hmac=7ae57e1ca9639279a5ad067b64dbe6b0084136d21343f98a1d8663736fe8b74f'
				)	
	);

$a5 = array( 'category'=>"Football",
			'name' =>'India vs Khastican (7 July 2019)',
			'desc'=>'',
			'cookie'=> array( array ( 'domain'=>'value',
									  'name'=>'value',
									  'value'=>'value'
								),
							  array ( 'domain'=>'value',
									  'name'=>'value',
									  'value'=>'value'
							  	)	    
				),
			'playlist'=> array( array ( 'resolution'=>'240',
								        'video'=>'https://live07.akt.hotstar-cdn.net/hls/live/2003374/herointlcup2019/eng/fulldvrm01intercontinental07july2019/master_1.m3u8',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
									),
							    array ( 'resolution'=>'360',
									    'video'=>'https://live07.akt.hotstar-cdn.net/hls/live/2003374/herointlcup2019/eng/fulldvrm01intercontinental07july2019/master_2.m3u8',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
							  	),
							    array ( 'resolution'=>'480',
									    'video'=>'https://live07.akt.hotstar-cdn.net/hls/live/2003374/herointlcup2019/eng/fulldvrm01intercontinental07july2019/master_3.m3u8',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
							  	),
							    array ( 'resolution'=>'720',
									    'video'=>'https://live07.akt.hotstar-cdn.net/hls/live/2003374/herointlcup2019/eng/fulldvrm01intercontinental07july2019/master_4.m3u8',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
							  	),
							    array ( 'resolution'=>'1080',
									    'video'=>'https://live07.akt.hotstar-cdn.net/hls/live/2003374/herointlcup2019/eng/fulldvrm01intercontinental07july2019/master_5.m3u8',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
							  	)
				),
			'requests'=> array( 'https://live07.akt.hotstar-cdn.net/hls/live/2003374/herointlcup2019/eng/fulldvrm01intercontinental07july2019/master.m3u8?a=ns&hdnea=st=1562509974~exp=1562513574~acl=/*~hmac=48cba766b4e40615b57b0d1a697142de2758911c6b03765e254a8e84277b2862'
				)	
	);
/*
$a1 = array( 'category'=>"Cricket",
			'name' =>'New Zealand vs England',
			'desc'=>'ICC cricket world cup',
			'cookie'=> array( array ( 'domain'=>'value',
									  'name'=>'value',
									  'value'=>'value'
								),
							  array ( 'domain'=>'value',
									  'name'=>'value',
									  'value'=>'value'
							  	)	    
				),
			'playlist'=> array( array ( 'resolution'=>'240',
								        'video'=>'',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
									),
							    array ( 'resolution'=>'360',
									    'video'=>'',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
							  	),
							    array ( 'resolution'=>'480',
									    'video'=>'',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
							  	),
							    array ( 'resolution'=>'720',
									    'video'=>'',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
							  	),
							    array ( 'resolution'=>'1080',
									    'video'=>'',
									    'audio'=>'null',
									    'type'=>'application/x-mpegURL'
							  	)
				),
			'requests'=> array( ''
				)	
	);
*/


$a2 = array( 'category'=>"Football",
			'name' =>'Argentina vs Venezuela (29 June 2019)',
			'desc'=>'Copa America',
			'cookie'=> array( array ( 'domain'=>'value',
									  'name'=>'value',
									  'value'=>'value'
								),
							  array ( 'domain'=>'value',
									  'name'=>'value',
									  'value'=>'value'
							  	)	    
				),
			'playlist'=> array( array ( 'resolution'=>'720',
								        'video'=>'https://andygphunter.s3-accelerate.amazonaws.com/48076347_lbespnp_5.m3u8',
									    'audio'=>'null', 
									    'default'
								      )
								),
							  	
				
			'requests'=> array( )	
	);

$a3 = array( 'category'=>"Future Streams",
			'name' =>'Brazil vs Peru (8 July 2019)',
			'desc'=>'Copa America',
			'cookie'=> array( array ( 'domain'=>'value',
									  'name'=>'value',
									  'value'=>'value'
								),
							  array ( 'domain'=>'value',
									  'name'=>'value',
									  'value'=>'value'
							  	)	    
				),
			'playlist'=> array(),
			'requests'=> array()	
	);
	
$a4 = array( 'category'=>"Future Streams",
			'name' =>'India vs New Zealand (9 July 2019)',
			'desc'=>'ICC world Cup',
			'cookie'=> array( array ( 'domain'=>'value',
									  'name'=>'value',
									  'value'=>'value'
								),
							  array ( 'domain'=>'value',
									  'name'=>'value',
									  'value'=>'value'
							  	)	    
				),
			'playlist'=> array(),
			'requests'=> array()	
	);


$stream = array($a1);
/*
$stream->match = 'IND vs ENG';
$stream->MasterUrl = 'https://live15.hotstar.com/hls/live/2004203/icccwc2019/eng/15mindvr1440000716m01qcct0q9zfb30june2019/master.m3u8?a=ns&hdnea=st=1561899836~exp=1561903436~acl=/*~hmac=d5ac917797f90e5c066da1927ae62961c9b8c66c7a38c8c7a5bf1c70718b6dc5';

$stream->P180 = 'https://live15.hotstar.com/hls/live/2004203/icccwc2019/eng/15mindvr1440000716m01qcct0q9zfb30june2019/master_1.m3u8';
$stream->P360 = 'https://live15.hotstar.com/hls/live/2004203/icccwc2019/eng/15mindvr1440000716m01qcct0q9zfb30june2019/master_2.m3u8';
$stream->P720 = 'https://live15.hotstar.com/hls/live/2004203/icccwc2019/eng/15mindvr1440000716m01qcct0q9zfb30june2019/master_3.m3u8';
$stream->P1080 = 'https://live15.hotstar.com/hls/live/2004203/icccwc2019/eng/15mindvr1440000716m01qcct0q9zfb30june2019/master_4.m3u8';
$stream->cookie = array(
        array('domain'=>'.live15.hotstar.com','name'=>'hdntl','value'=>'exp=1561978217~acl=%2f*~data=hdntl~hmac=fa8779d0e7cda0d3cd7476514dcfccd8df94cf4c2531b44a061cc175a5985bff'),
		array('domain'=>'.live15.hotstar.com','name'=>'sample','value'=>'myvalue') 
	);
*/
echo json_encode($stream);


?>