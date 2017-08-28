<?php
    $GLOBALS = [
        'lang' => 'pt',
        'title' => 'Around the Block',
        'description' => 'Around the Block',
        'copyright' => 'Web Series powered by <a href="http://paratii.video" target="_blank">Paratii</a>',
        'logo' => 'images/logo.png',
        'image_src' => 'images/src_image.png',
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
        'sections' => [
            'teasers' => [
                'title' => 'Teasers',
                // 'text' => 'The <span>minds, ideals, tech, politics, ethics</span> behind the <strong>Blockchains</strong>',
                'text' => 'The <span>minds</span> behind the <strong>Blockchains</strong>',
                'button-video' => 'Next video',
                'button-scroll' => 'Keep scrolling',
                'items' => [
                    [
                        'class' => 'active',
                        'poster' => 'images/teasers/teaser-01.jpg',
                        'media' => [
                            [
                                'src' => 'videos/teaser-01.mp4' ,
                                'type' => 'video/mp4', 
                            ],
                            [
                                'src' => 'videos/teaser-01.webm' ,
                                'type' => 'video/webm', 
                            ],
                        ]
                    ],
                    [
                        'class' => '',
                        'poster' => 'images/teasers/teaser-02.jpg',
                        'media' => [
                            [
                                'src' => 'videos/teaser-02.mp4' ,
                                'type' => 'video/mp4', 
                            ],
                            [
                                'src' => 'videos/teaser-02.webm' ,
                                'type' => 'video/webm', 
                            ],
                        ]
                    ],
                ]
            ],
            'about' => [
                'title' => 'About',
                'content' => '<p class="font-text-bigger colorful">Around the Block is a 6-episode documentary series about blockchain technologists who are decentralising the engines of modern society.</p><p class="font-text-bigger">It\'s production is spearheaded by one of Brazil\'s biggest film companies, and launch is scheduled for Q4 2017. Content will be released on Paratii, a decentralised peer-to-peer video player under development.</p>'
            ],
            'chapters' => [
                'title' => 'Chapters',
                'alert' => 'Not available yet',
                'items' => [
                    [
                        'label' => 'chapter_1',
                        'title' => 'the<br> genesis<br> block',
                        'text' => 'networks start from a single individual. individuals start from a single purpose.',
                        'background' => './images/chapters/chapter-01.png',
                        'background-info' => './images/chapters/chapter-01-info.png',
                    ],
                    [
                        'label' => 'chapter_2',
                        'title' => 'scars<br> of<br> consensus',
                        'text' => 'every new community is born from a diaspora.',
                        'background' => './images/chapters/chapter-02.png',
                        'background-info' => './images/chapters/chapter-02-info.png',
                    ],
                    [
                        'label' => 'chapter_3',
                        'title' => 'conscious<br> code:<br> where Darwin<br> meets Turing',
                        'text' => 'autonomous programs defy common sense. Defy intermediaries. Defy human corruptibility. Can they defy instructions?',
                        'background' => './images/chapters/chapter-03.png',
                        'background-info' => './images/chapters/chapter-03-info.png',
                    ],
                    [
                        'label' => 'chapter_4',
                        'title' => 'the pot<br> of gold<br> at the end<br> of the chain',
                        'text' => '“the worst things I bought with my bitcoins were dollars.”',
                        'background' => './images/chapters/chapter-04.png',
                        'background-info' => './images/chapters/chapter-04-info.png',
                    ],
                    [
                        'label' => 'chapter_5',
                        'title' => 'the system is<br> the message:<br> content<br> creators 3.0',
                        'text' => 'anonymity, sovereignty and open access to a trustless network: creators, meet your new anti-platforms.',
                        'background' => './images/chapters/chapter-05.png',
                        'background-info' => './images/chapters/chapter-05-info.png',
                    ],
                    [
                        'label' => 'chapter_6',
                        'title' => 'proof<br> of<br> humanity',
                        'text' => 'code-incentivized human behaviours, “universal basic equity”, the first decentralized autonomous states, and… wait - haven’t we heard this all before?',
                        'background' => './images/chapters/chapter-06.png',
                        'background-info' => './images/chapters/chapter-06-info.png',
                    ],
                ]
            ],
            'interviews' => [
                'title' => 'Interviews with',
                'button-back' => 'Go back',
                'items' => [
                    [
                        'class' => 'left',
                        'title' => 'Sergio Lerner',
                        'break' => 'Sergio<br /> Lerner',
                        'href' => 'sergio-lerner',
                        'image' => './images/interviews/Sergio_Lerner.jpg',
                        'gif' => './images/interviews/Sergio_Lerner.gif',
                        'about' => 'Security researcher, co-founder of RSK Labs, author of the Lumino-Compression Transaction Protocol',
                        'description' => 'Sergio has found multiple vulnerabilities in Bitcoin Core and extensively contributed to its codebase. A proponent of off-chain scaling, he\'s the Chief Scientist @ RSK Labs, which intends to bring smart contracts to Bitcoin.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'https://github.com/SergioDemianLerner',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'https://twitter.com/sdlerner',
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'title' => 'Alex Van de Sande',
                        'break' => 'Alex Van<br /> de Sande',
                        'href' => 'alex-van-de-sande',
                        'image' => './images/interviews/Alex_Van_de_Sande.jpg',
                        'gif' => './images/interviews/Alex_Van_de_Sande.gif',
                        'about' => 'Designer and frontend developer, team lead for Mist (the Ethereum browser)',
                        'description' => 'Alex proposed Mist still as an Ethereum fan, and has since become the project\'s lead. He\'s also part of the team who brought us ENS, the Ethereum Name System, and is widely recognised as one of the most respectable voices in the community.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'https://github.com/alexvandesande',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'https://twitter.com/avsa',
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'title' => 'Aron Fischer',
                        'break' => 'Aron<br /> Fischer',
                        'href' => 'aron-fischer',
                        'image' => './images/interviews/Aron_Fischer.jpg',
                        'gif' => './images/interviews/Aron_Fischer.gif',
                        'about' => 'Maths PhD, engineer @ Colony and Swarm',
                        'description' => 'Specialized in Algebraic Topology and Homotopy theory, Aron is developing the governance protocols @ Colony, and working on state and payment channels for the Ethereum Foundation’s Swarm incentive structure.',
                        'social' => [
                            [
                                'class' => 'twitter',
                                'url' => 'https://twitter.com/mathsguy',
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'title' => 'Viktor Trón',
                        'break' => 'Viktor<br /> Trón',
                        'href' => 'viktor-tron',
                        'image' => './images/interviews/Viktor_Tron.jpg',
                        'gif' => './images/interviews/Viktor_Tron.gif',
                        'about' => 'Ethereum core developer, team lead for Swarm',
                        'description' => 'A linguist with long academic records, Viktor has shifted focus towards building the data layer for web 3.0 a few years ago, as one of Ethereum\'s first employees.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'https://github.com/zelig',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'https://twitter.com/zeligf',
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'title' => 'Simon de la Rouviere',
                        'break' => 'Simon de<br /> la Rouviere',
                        'href' => 'simon-de-la-rouviere',
                        'image' => './images/interviews/Simon_de_la_Rouviere.jpg',
                        'gif' => './images/interviews/Simon_de_la_Rouviere.gif',
                        'about' => 'Blockchain developer @ Consensys',
                        'description' => 'A South African self proclaimed "engineer of societies", Simon\'s time is shared among coding for UJO, a decentralised music distribution platform; conceiving novel models for curation and content monetisation; and working for and Consensys.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'https://github.com/simondlr',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'https://twitter.com/simondlr',
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'title' => 'Anthony di Iorio & Charlie Shrem',
                        'break' => 'Anthony di Iorio & Charlie Shrem',
                        'href' => 'charlie-shrem',
                        'image' => './images/interviews/Anthony_di_Iorio_Charlie_Shrem.jpg',
                        'gif' => './images/interviews/Anthony_di_Iorio_Charlie_Shrem.gif',
                        'about' => 'Co-founder of Ethereum, Co-founder of BitInstant, CEO and COO @ Jaxx',
                        'description' => 'Charlie\'s story is mixed with that of Bitcoin itself. Currently leading operations @ Jaxx, he\'s been through a conviction, mainstream fame and a series of crypto businesses. Former Chief Digital Officer of the Toronto Stock Exchange, di Iorio was largely responsible for funding early development of Ethereum before leading Jaxx and Decentral.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'https://github.com/cshrem',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'https://twitter.com/charlieshrem',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'https://twitter.com/diiorioanthony',
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'title' => 'Everton Fraga',
                        'break' => 'Everton<br /> Fraga',
                        'href' => 'everton-fraga',
                        'image' => './images/interviews/Everton_Fraga.jpg',
                        'gif' => './images/interviews/Everton_Fraga.gif',
                        'about' => 'Software engineer @ the Ethereum foundation',
                        'description' => 'Everton is the second Brazilian addition to Ethereum\'s official team, and has been contributing with the development of Mist, the platform\'s browser.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'https://github.com/evertonfraga',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'https://twitter.com/evertonfraga',
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'title' => 'Gavin Wood',
                        'break' => 'Gavin<br /> Wood',
                        'href' => 'gavin-wood',
                        'image' => './images/interviews/Gavin_Wood.jpg',
                        'gif' => './images/interviews/Gavin_Wood.gif',
                        'about' => 'Former CTO of Ethereum, founder of Parity Technologies, inventor of Polkadot',
                        'description' => 'Gavin coded the first functional implementation of Ethereum, invented the Solidity contract language and wrote the Yellow Paper - first formal specification of any blockchain protocol and one of the key ways Ethereum distinguishes itself.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'https://github.com/gavofyork',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'https://twitter.com/gavofyork',
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'title' => 'Don Tapscott',
                        'break' => 'Don Tapscott',
                        'href' => 'don-tapscott',
                        'image' => './images/interviews/Don_Tapscott.jpg',
                        'gif' => './images/interviews/Don_Tapscott.gif',
                        'about' => 'Co-founder @ Blockchain Research Institute, author of 15 books and world-known authority on decentralisation',
                        'description' => 'Don wrote "The Blockchain Revolution" and gave the most watched Ted Talk ever on descentralization. Through a research institute, he\'s helping governments and corporate entities around the world use blockchains to create civic participation and improve political or business processes.',
                        'social' => [
                            [
                                'class' => 'twitter',
                                'url' => 'https://twitter.com/dtapscott',
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'title' => 'Alexey Akhunov',
                        'break' => 'Alexey<br /> Akhunov',
                        'href' => 'alexey-akhunov',
                        'image' => './images/interviews/Alexey_Akhunov.jpg',
                        'gif' => './images/interviews/Alexey_Akhunov.gif',
                        'about' => 'Ethereum developer, former banking software specialist',
                        'description' => 'Russian-born, security-oriented, Alexey is a PhD in Computer Sciences who\'s been voluntarily contributing to the Ethereum ecosystem.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'https://github.com/AlexeyAkhunov',
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'title' => 'Ronaldo Lemos',
                        'break' => 'Ronaldo<br /> Lemos',
                        'href' => 'ronaldo-lemos',
                        'image' => './images/interviews/Ronaldo_Lemos.jpg',
                        'gif' => './images/interviews/Ronaldo_Lemos.gif',
                        'about' => 'Father of Brazil\'s Marco Civil Law of the Internet, former professor @ Columbia University',
                        'description' => 'Director for the Institute of Technology and Society in Rio de Janeiro, Ronaldo has spearheaded the launch of Mudamos, an Ethereum-based application for pushing qualifying law proposals to the chamber and encouraging civic participation in Brazil.',
                        'social' => [
                            [
                                'class' => 'twitter',
                                'url' => 'https://twitter.com/lemos_ronaldo',
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'title' => 'Victor Maia',
                        'break' => 'Victor<br /> Maia',
                        'href' => 'victor-maia',
                        'image' => './images/interviews/Victor_Maia.jpg',
                        'gif' => './images/interviews/Victor_Maia.gif',
                        'about' => 'Software engineer and programming language design researcher',
                        'description' => 'Part of the Mist (Ethereum browser) team, Victor has been following the vision of bringing it to the masses. His work on Moon, a novel language for writing faster dApps, is a recent effort in this direction.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'https://github.com/MaiaVictor',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'https://twitter.com/maiavictr',
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
                'form-02-label-01' => 'who else do you want to see on around the block?',
                'form-02-label-02' => 'Why?',
                'form-02-button' => 'Submit',
                'emails' => [
                    ['email' => 'asasa'],
                    ['email' => 'asasa'],
                    ['email' => 'asasa'],
                ]
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