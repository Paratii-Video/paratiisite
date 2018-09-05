<?php
    $GLOBALS = [
        'lang' => 'pt',
        'title' => 'Around the Block',
        'description' => 'Around the Block is a 4-episode documentary series about blockchain technologists who are decentralising the engines of modern society.',
        'copyright' => 'Web Series powered by <a href="http://paratii.video" target="_blank">Paratii</a>',
        'logo' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/intro/logo-around-the-block-mobile.png',
        'logo-mobile' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/intro/logo-around-the-block-mobile.png',
        'image_src' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/src_image.png',
        'favicon' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/favicon.ico',
        'url' => 'paratii.video/around-the-block/',
        'GA' => 'UA-99283680-1',
        'dateCreated' => '2017',
        'director' => 'Paratii',
        'main-nav' => [
            'items' => [
                [
                    'title' => 'Teasers',
                    'class' => '',
                    'href' => '#teasers'
                ],
                [
                    'title' => 'Chapters',
                    'class' => '',
                    'href' => '#chapters'
                ],
                [
                    'title' => 'About',
                    'class' => '',
                    'href' => '#about'
                ],
                [
                    'title' => 'Interviews with',
                    'class' => '',
                    'href' => '#interviews'
                ],
                [
                    'title' => 'Subscribe',
                    'class' => '',
                    'href' => '#subscribe'
                ],
                [
                    'title' => 'Discover Paratii',
                    'class' => '',
                    'href' => '#discover'
                ],
            ]
        ],
        'main' => [
            'title' => 'Content',
        ],
        'footer' => [
            'title' => 'Links',
            'items' => [
                [
                    'title' => 'Gitter',
                    'icon' => '#icon-footer-gitter',
                    'href' => 'https://gitter.im/Paratii-Video/'
                ],
                [
                    'title' => 'Medium',
                    'icon' => '#icon-footer-medium',
                    'href' => 'https://medium.com/paratii'
                ],
                [
                    'title' => 'E-mail',
                    'icon' => '#icon-footer-email',
                    'href' => 'mailto:hello@paratii.video'
                ],
                [
                    'title' => 'Github',
                    'icon' => '#icon-footer-github',
                    'href' => 'https://github.com/Paratii-Video/wiki/wiki'
                ],
                [
                    'title' => 'Steemit',
                    'icon' => '#icon-footer-steemit',
                    'href' => 'https://steemit.com/@paratii'
                ],
            ]
        ],
        'intro' => [
            'loader' => 'loading'
        ],
        'sections' => [
            'banner' => [
                'label' => '🕒 Ep. 1 launch',
                'date' => '2018-09-18T15:00:00'
            ],
            'event' => [
                'title' => 'Event'
            ],
            'teasers' => [
                'title' => 'Teasers',
                'subtitle' => 'The minds behind the Blockchains',
                'typewrite' => [
                    'period' => '2000',
                    'phrase-before' => 'The',
                    'phrase-after' => 'behind the  <strong>Blockchains</strong>',
                    'items' => [
                        [ 'type' => 'minds' ],
                        [ 'type' => 'ideals' ],
                        [ 'type' => 'tech' ],
                        [ 'type' => 'politics' ],
                        [ 'type' => 'ethics' ],
                    ]
                ],
                'text' => 'The minds behind the <strong>Blockchains</strong>',
                'button-video' => 'Next video',
                'button-scroll' => 'Keep scrolling',
                'items' => [
                    [
                        'class' => 'active',
                        'name' => 'Around The Block - Trailer',
                        'description' => 'Around the Block is a 4-episode documentary series about blockchain technologists who are decentralising the engines of modern society.',

                        'poster' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/trailers/around-the-block-trailer-01-leg.png',
                        'media' => [
                            [
                                'src' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/videos/trailers/around-the-block-trailer-01-leg.mp4' ,
                                'type' => 'video/mp4', 
                            ]
                        ]
                    ],
                    [
                        'class' => '',
                        'name' => 'Around The Block - Teaser 2 - Alex Van de Sande',
                        'description' => 'Designer and frontend developer, team lead for Mist (the Ethereum browser)',

                        'poster' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/teasers/teaser-01.jpg',
                        'media' => [
                            [
                                'src' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/videos/teaser-01.mp4' ,
                                'type' => 'video/mp4', 
                            ]
                        ]
                    ],
                    [
                        'class' => '',
                        'name' => 'Around The Block Series - Teaser 1 - Sergio Lerner',
                        'description' => 'Security researcher, co-founder of RSK Labs, author of the Lumino-Compression Transaction Protocol',
                        'poster' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/teasers/teaser-02.jpg',
                        'media' => [
                            [
                                'src' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/videos/teaser-02.mp4' ,
                                'type' => 'video/mp4', 
                            ],
                        ]
                    ],
                ]
            ],
            'about' => [
                'title' => 'About',
                'content' => '<p class="font-text-bigger colorful">Around the Block is an episodical documentary series about blockchain technologists who are decentralising the engines of modern society.</p><p class="font-text-bigger">It\'s production is spearheaded by one of Brazil\'s biggest film companies, and launch is scheduled for Q3 2018. Content will be released on The Lab, a peer to peer video site built on IPFS, Ethereum and Paratii open source technologies.</p>'
            ],
            'chapters' => [
                'title' => 'Chapters',
                'alert' => 'Not available yet',
                'items' => [
                    [
                        'href' => 'https://lab.paratii.video/',
                        'label' => 'chapter_1',
                        'title' => 'The<br> Genesis<br> Block',
                        'text' => 'networks start from a single individual. individuals start from a single purpose.',
                        'background' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/chapters/chapter-01.png',
                        'background-info' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/chapters/chapter-01-info.png',
                    ],
                    [
                        'href' => '#',
                        'label' => 'chapter_2',
                        'title' => 'Scars<br> of<br> consensus',
                        'text' => 'every new community is born from a diaspora.',
                        'background' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/chapters/chapter-02.png',
                        'background-info' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/chapters/chapter-02-info.png',
                    ],
                    [
                        'href' => '#',
                        'label' => 'chapter_3',
                        'title' => 'Where<br> Darwin<br> meets<br> Turing',
                        'text' => 'autonomous programs defy common sense. Defy intermediaries. Defy human corruptibility. Can they defy instructions?',
                        'background' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/chapters/chapter-03.png',
                        'background-info' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/chapters/chapter-03-info.png',
                    ],
                    [
                        'href' => '#',
                        'label' => 'chapter_4',
                        'title' => 'Proof<br> of<br> humanity',
                        'text' => 'code-incentivized human behaviours, “universal basic equity”, the first decentralized autonomous states, and… wait - haven’t we heard this all before?',
                        'background' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/chapters/chapter-06.png',
                        'background-info' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/chapters/chapter-06-info.png',
                    ],
                ]
            ],
            'interviews' => [
                'title' => 'Interviews with',
                'button-back' => 'Go back',
                'items' => [
                    [
                        'class' => 'left',
                        'href' => 'anthony-di-iorio',
                        'nav-title' => 'Anthony di Iorio',
                        'title' => 'Anthony di Iorio',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Anthony_di_Iorio.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Anthony_di_Iorio.gif',
                        'about' => 'Co-founder of Ethereum, CEO @ Jaxx',
                        'description' => 'Former Chief Digital Officer of the Toronto Stock Exchange, di Iorio was one of the responsible people for funding early development of Ethereum before leading Jaxx and Decentral.',
                        'header' => [
                            [
                                'title' => 'Anthony di Iorio',
                                'social' => [
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/diiorioanthony',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'href' => 'charlie-shrem',
                        'nav-title' => 'Charlie Shrem',
                        'title' => 'Charlie Shrem',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Charlie_Shrem.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Charlie_Shrem.gif',
                        'about' => 'Co-founder @ BitInstant, COO @ Jaxx',
                        'description' => 'Charlie\'s story is mixed with that of Bitcoin itself. Currently leading operations @ Jaxx, he\'s been through a conviction, mainstream fame and a series of crypto businesses.',
                        'header' => [
                            [
                                'title' => 'Charlie Shrem',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/cshrem',
                                    ],
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/charlieshrem',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'href' => 'ashley-tyson',
                        'nav-title' => 'Ashley Tyson',
                        'title' => 'Ashley Tyson',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Ashley_Tyson.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Ashley_Tyson.gif',
                        'about' => 'Partnerships and Strategic Initiatives, Web3 Foundation',
                        'description' => 'Having been involved with Bitcoin and cryptocurrencies from early on, Ashley leads the Web3 foundation\'s strategic efforts and is an active voice when it comes to governance in the Ethereum community.',
                        'header' => [
                            [
                                'title' => 'Ashley Tyson',
                                'social' => [
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/AsherT',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'href' => 'omar-bhan',
                        'nav-title' => 'Omar Bhan',
                        'title' => 'Omar Bhan',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Omar_Bhan.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Omar_Bhan.gif',
                        'about' => 'Crypt0 - Opinion Maker',
                        'description' => 'YouTube channel host, entertainer, actor, ushering in the future through exposing financial/political corruption, truth, justice, and freedom.',
                        'header' => [
                            [
                                'title' => 'Omar Bhan',
                                'social' => [
                                    [
                                        'label' => 'youtube',
                                        'url' => 'https://www.youtube.com/channel/UCdUSSt-IEUg2eq46rD7lu_g',
                                    ],
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/crypt0snews',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'href' => 'dina-carabas',
                        'nav-title' => 'Dina Carabas',
                        'title' => 'Dina Carabas',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Dina_Carabas.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Dina_Carabas.gif',
                        'about' => 'Board member at Web3 Foundation',
                        'description' => 'Ex-McKinsey, Dina has been helping launch Polkadot and spearheading the Web3 Foundation\'s business efforts.',
                        'header' => [
                            [
                                'title' => 'Dina Carabas',
                                'social' => []
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'href' => 'eric-tang',
                        'nav-title' => 'Eric Tang',
                        'title' => 'Eric Tang',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Eric_Tang.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Eric_Tang.gif',
                        'about' => 'CTO @ Livepeer',
                        'description' => 'Carnegie Mellon alumni, previously CTO at Wildcard, building decentralised live streaming on the Ethereum blockchain.',
                        'header' => [
                            [
                                'title' => 'Eric Tang',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/ericxtang',
                                    ],
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/ericxtang',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'href' => 'felipe-santana',
                        'nav-title' => 'Felipe Santana',
                        'title' => 'Felipe Santana',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Felipe_Santana.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Felipe_Santana.gif',
                        'about' => 'Project Lead @ Paratii',
                        'description' => 'Crowdfunding pioneer in Brazil, ex-Endeavor & BossaNovaFilms',
                        'header' => [
                            [
                                'title' => 'Felipe Santana',
                                'social' => [
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/Felipether',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'href' => 'jelle-gerbrandy',
                        'nav-title' => 'Jelle Gerbrandy',
                        'title' => 'Jelle Gerbrandy',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Jelle_Gerbrandy.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Jelle_Gerbrandy.gif',
                        'about' => 'CTO @ Paratii',
                        'description' => 'A Ph.D. in Logic, visiting scholar at Stanford, Jelle was previously the CTO at Backfeed, has written contracts for projects in the space, and leads the technical team at Paratii.',
                        'header' => [
                            [
                                'title' => 'Jelle Gerbrandy',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/jellegerbrandy',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'href' => 'marco-canut',
                        'nav-title' => 'Marco Canut',
                        'title' => 'Marco Canut',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Marco_Canut.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Marco_Canut.gif',
                        'about' => 'Co-founder & CTO @ Coinwise',
                        'description' => 'Computer security specialist, cryptocurrencies advocate. Ex-CTO of Tempest Security Technologies, almost two-decade experience in infrastructure and computer security.',
                        'header' => [
                            [
                                'title' => 'Marco Canut',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/marcocarnut',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'href' => 'marco-thuy',
                        'nav-title' => 'Michael Thuy',
                        'title' => 'Michael Thuy',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Michael_Thuy.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Michael_Thuy.gif',
                        'about' => 'System Architect @ Swarm City',
                        'description' => 'Information architect and developer, Michael is an early member of the Ethereum community and is developing peer-to-peer infrastructure for desintermediated transportation services.',
                        'header' => [
                            [
                                'title' => 'Michael Thuy',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/kingflurkel',
                                    ],
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/kingflurkel',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'href' => 'peter-czaban-and-marek-kotewicz',
                        'nav-title' => 'Peter Czaban and Marek Kotewicz',
                        'title' => 'Peter Czaban and Marek Kotewicz',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Peter_Czaban_Marek_Kotewicz.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Peter_Czaban_Marek_Kotewicz.gif',
                        'about' => 'Executive Director @ Web3 Foundation and Core Developer @ Parity',
                        'description' => 'Peter and Marek are two of names responsible for bringing the Polkadot project to life, just as other ambitious projects held by Parity Technologies, such as the Substrate toolkit.',
                        'header' => [
                            [
                                'title' => 'Peter Czaban',
                                'social' => []
                            ],
                            [
                                'title' => 'Marek Kotewicz',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/debris',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'href' => 'robert-habermeier',
                        'nav-title' => 'Robert Habermeier',
                        'title' => 'Robert Habermeier',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Robert_Habermeier.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Robert_Habermeier.gif',
                        'about' => '',
                        'description' => 'Polkadot co-founder, pioneering parachain research & development, Thiel Fellow, Robert is one among the sharpest young minds in the space.',
                        'header' => [
                            [
                                'title' => 'Robert Habermeier',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/rphmeier',
                                    ],
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/rphmeier',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'href' => 'fernando-ulrich',
                        'nav-title' => 'Fernando Ulrich',
                        'title' => 'Fernando Ulrich',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Fernando_Ulrich.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Fernando_Ulrich.gif',
                        'about' => 'Cryptocurrency Researcher @ XP Investimentos',
                        'description' => 'Brazil\'s leading authority on the economy of crypto-assets, Fernando hosts an influential YouTube channel on investment and Bitcoin.',
                        'header' => [
                            [
                                'title' => 'Fernando Ulrich',
                                'social' => [
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/fernandoulrich',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'href' => 'rosine-kadamani',
                        'nav-title' => 'Rosine Kadamani',
                        'title' => 'Rosine Kadamani',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Rosine_Kadamani.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Rosine_Kadamani.gif',
                        'about' => 'Founder of Blockchain Academy',
                        'description' => 'Lawyer for 13 years in a previous life. Specialized in Banking Law, has taught courses for the Central Bank of Brazil, the Securities and Exchange Commission, foreign authorities such as the Financial Intelligence Unit of Mauritius, as well as large banks and other companies, and students from the most influential universities in the country.',
                        'header' => [
                            [
                                'title' => 'Rosine Kadamani',
                                'social' => [
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/rosinekadamani',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'href' => 'zooko-wilcox',
                        'nav-title' => 'Zooko Wilcox',
                        'title' => 'Zooko Wilcox',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Zooko_Wilcox.png',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Zooko_Wilcox.gif',
                        'about' => 'Founder of Zcash',
                        'description' => 'Zooko is recognized for his work on DigiCash, Mojo Nation, ZRTP, “Zooko\'s Triangle”, Tahoe-LAFS, BLAKE2, and SPHINCS. He has more than 20 years of experience in open, decentralized systems, cryptography and information security, and is also the Founder of Least Authority. He likes to blog about health science.',
                        'header' => [
                            [
                                'title' => 'Zooko Wilcox',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/zooko',
                                    ],
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/zooko',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'href' => 'sergio-lerner',
                        'nav-title' => 'Sergio Lerner',
                        'title' => 'Sergio Lerner',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Sergio_Lerner.jpg',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Sergio_Lerner.gif',
                        'about' => 'Security researcher, co-founder of RSK Labs, author of the Lumino-Compression Transaction Protocol',
                        'description' => 'Sergio has found multiple vulnerabilities in Bitcoin Core and extensively contributed to its codebase. A proponent of off-chain scaling, he\'s the Chief Scientist @ RSK Labs, which intends to bring smart contracts to Bitcoin.',
                        'header' => [
                            [
                                'title' => 'Sergio Lerner',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/SergioDemianLerner',
                                    ],
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/sdlerner',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'href' => 'alex-van-de-sande',
                        'nav-title' => 'Alex Van de Sande',
                        'title' => 'Alex Van de Sande',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Alex_Van_de_Sande.jpg',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Alex_Van_de_Sande.gif',
                        'about' => 'Designer and frontend developer, team lead for Mist (the Ethereum browser)',
                        'description' => 'Alex proposed Mist still as an Ethereum fan, and has since become the project\'s lead. He\'s also part of the team who brought us ENS, the Ethereum Name System, and is widely recognised as one of the most respectable voices in the community.',
                        'header' => [
                            [
                                'title' => 'Alex Van de Sande',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/alexvandesande',
                                    ],
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/avsa',
                                    ]
                                ],
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'href' => 'aron-fischer',
                        'nav-title' => 'Aron Fischer',
                        'title' => 'Aron Fischer',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Aron_Fischer.jpg',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Aron_Fischer.gif',
                        'about' => 'Maths PhD, engineer @ Colony and Swarm',
                        'description' => 'Specialized in Algebraic Topology and Homotopy theory, Aron is developing the governance protocols @ Colony, and working on state and payment channels for the Ethereum Foundation’s Swarm incentive structure.',
                        'header' => [
                            [
                                'title' => 'Aron Fischer',
                                'social' => [
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/mathsguy',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'href' => 'viktor-tron',
                        'nav-title' => 'Viktor Trón',
                        'title' => 'Viktor Trón',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Viktor_Tron.jpg',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Viktor_Tron.gif',
                        'about' => 'Ethereum core developer, team lead for Swarm',
                        'description' => 'A linguist with long academic records, Viktor has shifted focus towards building the data layer for web 3.0 a few years ago, as one of Ethereum\'s first employees.',
                        'header' => [
                            [
                                'title' => 'Viktor Trón',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/zelig',
                                    ],
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/zeligf',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'href' => 'simon-de-la-rouviere',
                        'nav-title' => 'Simon de la Rouviere',
                        'title' => 'Simon de la Rouviere',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Simon_de_la_Rouviere.jpg',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Simon_de_la_Rouviere.gif',
                        'about' => 'Blockchain developer @ Consensys',
                        'description' => 'A South African self proclaimed "engineer of societies", Simon\'s time is shared among coding for UJO, a decentralised music distribution platform; conceiving novel models for curation and content monetisation; and working for and Consensys.',
                        'header' => [
                            [
                                'title' => 'Simon de la Rouviere',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/simondlr',
                                    ],
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/simondlr',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'href' => 'everton-fraga',
                        'nav-title' => 'Everton Fraga',
                        'title' => 'Everton Fraga',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Everton_Fraga.jpg',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Everton_Fraga.gif',
                        'about' => 'Software engineer @ the Ethereum foundation',
                        'description' => 'Everton is the second Brazilian addition to Ethereum\'s official team, and has been contributing with the development of Mist, the platform\'s browser.',
                        'header' => [
                            [
                                'title' => 'Everton Fraga',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/evertonfraga',
                                    ],
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/evertonfraga',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'href' => 'gavin-wood',
                        'nav-title' => 'Gavin Wood',
                        'title' => 'Gavin Wood',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Gavin_Wood.jpg',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Gavin_Wood.gif',
                        'about' => 'Former CTO of Ethereum, founder of Parity Technologies, inventor of Polkadot',
                        'description' => 'Gavin coded the first functional implementation of Ethereum, invented the Solidity contract language and wrote the Yellow Paper - first formal specification of any blockchain protocol and one of the key ways Ethereum distinguishes itself.',
                        'header' => [
                            [
                                'title' => 'Gavin Wood',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/gavofyork',
                                    ],
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/gavofyork',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'href' => 'don-tapscott',
                        'nav-title' => 'Don Tapscott',
                        'title' => 'Don Tapscott',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Don_Tapscott.jpg',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Don_Tapscott.gif',
                        'about' => 'Co-founder @ Blockchain Research Institute, author of 15 books and world-known authority on decentralisation',
                        'description' => 'Don wrote "The Blockchain Revolution" and gave the most watched Ted Talk ever on descentralization. Through a research institute, he\'s helping governments and corporate entities around the world use blockchains to create civic participation and improve political or business processes.',
                        'header' => [
                            [
                                'title' => 'Don Tapscott',
                                'social' => [
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/dtapscott',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'href' => 'alexey-akhunov',
                        'nav-title' => 'Alexey Akhunov',
                        'title' => 'Alexey Akhunov',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Alexey_Akhunov.jpg',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Alexey_Akhunov.gif',
                        'about' => 'Ethereum developer, former banking software specialist',
                        'description' => 'Russian-born, security-oriented, Alexey is a PhD in Computer Sciences who\'s been voluntarily contributing to the Ethereum ecosystem.',
                        'header' => [
                            [     
                                'title' => 'Alexey Akhunov',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/AlexeyAkhunov',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'href' => 'ronaldo-lemos',
                        'nav-title' => 'Ronaldo Lemos',
                        'title' => 'Ronaldo Lemos',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Ronaldo_Lemos.jpg',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Ronaldo_Lemos.gif',
                        'about' => 'Father of Brazil\'s Marco Civil Law of the Internet, former professor @ Columbia University',
                        'description' => 'Director for the Institute of Technology and Society in Rio de Janeiro, Ronaldo has spearheaded the launch of Mudamos, an Ethereum-based application for pushing qualifying law proposals to the chamber and encouraging civic participation in Brazil.',
                        'header' => [
                            [
                                'title' => 'Ronaldo Lemos',
                                'social' => [
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/lemos_ronaldo',
                                    ]
                                ],
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'href' => 'victor-maia',
                        'nav-title' => 'Victor Maia',
                        'title' => 'Victor Maia',
                        'image' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Victor_Maia.jpg',
                        'gif' => 'https://s3-us-west-1.amazonaws.com/paratiivideo/around-the-block/images/interviews/Victor_Maia.gif',
                        'about' => 'Software engineer and programming language design researcher',
                        'description' => 'Part of the Mist (Ethereum browser) team, Victor has been following the vision of bringing it to the masses. His work on Moon, a novel language for writing faster dApps, is a recent effort in this direction.',
                        'header' => [
                            [
                                'title' => 'Victor Maia',
                                'social' => [
                                    [
                                        'label' => 'github',
                                        'url' => 'https://github.com/MaiaVictor',
                                    ],
                                    [
                                        'label' => 'twitter',
                                        'url' => 'https://twitter.com/maiavictr',
                                    ]
                                ]
                            ]
                        ],
                        'button' => 'read more',
                    ],
                ]
            ],
            'subscribe' => [
                'title' => 'Subscribe',
                'alert-email' => 'Need a valid email',
                'alert-who' => 'Fill all fields',
                'alert-why' => 'Fill all fields',
                'form-01-title' => 'Subscribe today',
                'form-01-text' => 'and begin receiving exclusive content',
                'form-01-label' => 'email',
                'form-01-button' => 'Submit',
                'form-02-title' => 'Suggest other interviews',
                'form-02-label-01' => 'who else do you want to see on around the block? why?',
                'form-02-label-02' => 'e-mail',
                'form-02-button' => 'Submit'
            ],
            'discover' => [
                'title' => 'Discover Paratii',
                'items' => [
                    [
                        'date' => '2017-06-14',
                        'date-label' => 'jul 14',
                        'title' => 'Announcing “Around the Block”: a Documentary Series about the Minds Behind the Blockchains',
                        'url' => 'http://www.blockchain.com/',
                    ],
                    [
                        'date' => '2017-05-30',
                        'date-label' => 'may 30',
                        'title' => '+117% in 21 days: a Practical Trading Experiment With Cryptocurrencies [#1]',
                        'url' => 'http://www.blockchain.com/',
                    ],
                    [
                        'date' => '2017-04-10',
                        'date-label' => 'apr 10',
                        'title' => 'Online Video Meets Decentralised Business Models: What’s Next?',
                        'url' => 'http://www.blockchain.com/',
                    ],

                ]
            ]
        ]
    ];
?>