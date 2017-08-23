<?php
    $GLOBALS = [
        'lang' => 'pt',
        'title' => 'Around the Block',
        'description' => 'Around the Block',
        'main-nav' => [
            'title' => 'Menu',
            'items' => [
                [
                    'title' => 'Teasers',
                    'class' => '',
                    'href' => '#'
                ],
                [
                    'title' => 'Chapters',
                    'class' => '',
                    'href' => '#'
                ],
                [
                    'title' => 'About',
                    'class' => '',
                    'href' => '#'
                ],
                [
                    'title' => 'Interviews with',
                    'class' => '',
                    'href' => '#'
                ],
                [
                    'title' => 'Subscribe',
                    'class' => '',
                    'href' => '#'
                ],
                [
                    'title' => 'Discover Paratii',
                    'class' => '',
                    'href' => '#'
                ],
            ]
        ],
        'main' => [
            'title' => 'Content',
        ],
        'aside' => [
            'title' => 'Links',
            'items' => [
                [
                    'title' => 'Gitter',
                    'icon' => '#icon-gitter',
                    'href' => '#'
                ],
                [
                    'title' => 'Medium',
                    'icon' => '#icon-medium',
                    'href' => '#'
                ],
                [
                    'title' => 'E-mail',
                    'icon' => '#icon-email',
                    'href' => 'mailto:say@aroundtheblock.com'
                ],
                [
                    'title' => 'Github',
                    'icon' => '#icon-github-2',
                    'href' => '#'
                ],
                [
                    'title' => 'Steemit',
                    'icon' => '#icon-steemit',
                    'href' => '#'
                ],
            ]
        ],
        'sections' => [
            'teasers' => [
                'title' => 'Teasers',
                'button' => 'Keep scrolling',
                'items' => [
                    [
                        'title' => 'The minds behind the <strong>Blockchains</strong>',
                        'class' => 'active',
                        'button' => 'Next teaser',
                        'media' => '<iframe src="https://player.vimeo.com/video/152601745" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>',
                    ],
                    [
                        'title' => 'The tech behind the <strong>Blockchains</strong>',
                        'class' => '',
                        'button' => 'Next teaser',
                        'media' => '<iframe src="https://player.vimeo.com/video/229856130" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>',
                    ],
                    [
                        'title' => 'The ideals behind the <strong>Blockchains</strong>',
                        'class' => '',
                        'button' => 'Next teaser',
                        'media' => '<iframe src="https://player.vimeo.com/video/229856130" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>',
                    ],
                    [
                        'title' => 'The politics behind the <strong>Blockchains</strong>',
                        'class' => '',
                        'button' => 'Next teaser',
                        'media' => '<iframe src="https://player.vimeo.com/video/229936689" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>',
                    ],
                    [
                        'title' => 'The ethics behind the <strong>Blockchains</strong>',
                        'class' => '',
                        'button' => 'Next teaser',
                        'media' => '<iframe src="https://player.vimeo.com/video/205161349" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>',
                    ],
                ]
            ],
            'about' => [
                'title' => 'About',
                'content' => '<p class="font-text-bigger colorful">Around the Block is a 6-episode documentary series about blockchain technologists who are decentralising the engines of modern society.</p><p class="font-text-bigger">It\'s production is spearheaded by one of Brazil\'s biggest film companies, and launch is scheduled for Q4 2017. Content will be released on Paratii, a decentralised peer-to-peer video player under development.</p>'
            ],
            'chapters' => [
                'title' => 'Chapters',
                'items' => [
                    [
                        'title' => 'Title',
                        'background' => './images/chapters/chapter_01.jpg',
                    ],
                    [
                        'title' => 'Title',
                        'background' => './images/chapters/chapter_02.jpg',
                    ],
                    [
                        'title' => 'Title',
                        'background' => './images/chapters/chapter_03.jpg',
                    ],
                    [
                        'title' => 'Title',
                        'background' => './images/chapters/chapter_04.jpg',
                    ],
                    [
                        'title' => 'Title',
                        'background' => './images/chapters/chapter_05.jpg',
                    ],
                    [
                        'title' => 'Title',
                        'background' => './images/chapters/chapter_06.jpg',
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
                        'about' => 'Security researcher, co-founder of RSK Labs, author of the Lumino-Compression Transaction Protocol',
                        'description' => 'Sergio has found multiple vulnerabilities in Bitcoin Core and extensively contributed to its codebase. A proponent of off-chain scaling, he\'s the Chief Scientist @ RSK Labs, which intends to bring smart contracts to Bitcoin.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'http://github.com/',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'http://twitter.com/',
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
                        'about' => 'Designer and frontend developer, team lead for Mist (the Ethereum browser)',
                        'description' => 'Alex proposed Mist still as an Ethereum fan, and has since become the project\'s lead. He\'s also part of the team who brought us ENS, the Ethereum Name System, and is widely recognised as one of the most respectable voices in the community.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'http://github.com/',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'http://twitter.com/',
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
                        'about' => 'Maths PhD, engineer @ Colony and Swarm',
                        'description' => 'Specialized in Algebraic Topology and Homotopy theory, Aron is developing the governance protocols @ Colony, and working on state and payment channels for the Ethereum Foundation’s Swarm incentive structure.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'http://github.com/',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'http://twitter.com/',
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
                        'about' => 'Ethereum core developer, team lead for Swarm',
                        'description' => 'A linguist with long academic records, Viktor has shifted focus towards building the data layer for web 3.0 a few years ago, as one of Ethereum\'s first employees.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'http://github.com/',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'http://twitter.com/',
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
                        'about' => 'Blockchain developer @ Consensys',
                        'description' => 'A South African self proclaimed "engineer of societies", Simon\'s time is shared among coding for UJO, a decentralised music distribution platform; conceiving novel models for curation and content monetisation; and working for and Consensys.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'http://github.com/',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'http://twitter.com/',
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'right',
                        'title' => 'Charlie Shrem',
                        'break' => 'Charlie<br /> Shrem',
                        'href' => 'charlie-shrem',
                        'image' => './images/interviews/Charlie_Shrem.jpg',
                        'about' => 'Founding member of the Bitcoin Foundation, co-founder of BitInstant, COO @ Jaxx',
                        'description' => 'An early advocate, Charlie\'s story is mixed with that of Bitcoin itself. Currently leading operations @ Jaxx, he\'s been through a conviction, mainstream fame and a series of crypto businesses.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'http://github.com/',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'http://twitter.com/',
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
                        'about' => 'Software engineer @ the Ethereum foundation',
                        'description' => 'Everton is the second Brazilian addition to Ethereum\'s official team, and has been contributing with the development of Mist, the platform\'s browser.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'http://github.com/',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'http://twitter.com/',
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
                        'about' => 'Former CTO of Ethereum, founder of Parity Technologies, inventor of Polkadot',
                        'description' => 'Gavin coded the first functional implementation of Ethereum, invented the Solidity contract language and wrote the Yellow Paper - first formal specification of any blockchain protocol and one of the key ways Ethereum distinguishes itself.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'http://github.com/',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'http://twitter.com/',
                            ]
                        ],
                        'button' => 'read more',
                    ],
                    [
                        'class' => 'left',
                        'title' => 'Anthony di Iorio',
                        'break' => 'Anthony<br /> di Iorio',
                        'href' => 'anthony-di-iorio',
                        'image' => './images/interviews/Anthony_di_Iorio.jpg',
                        'about' => 'Co-founder of Ethereum, co-founder and CEO of Jaxx',
                        'description' => 'Former Chief Digital Officer of the Toronto Stock Exchange, di Iorio leads Jaxx, a multi-token blockchain interface, and Decentral, a software development company. In 2013, he was largely responsible for funding early development of Ethereum.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'http://github.com/',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'http://twitter.com/',
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
                        'about' => 'Ethereum developer, former banking software specialist',
                        'description' => 'Russian-born, security-oriented, Alexey is a PhD in Computer Sciences who\'s been voluntarily contributing to the Ethereum ecosystem.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'http://github.com/',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'http://twitter.com/',
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
                        'about' => 'Father of Brazil\'s Marco Civil Law of the Internet, former professor @ Columbia University',
                        'description' => 'Director for the Institute of Technology and Society in Rio de Janeiro, Ronaldo has spearheaded the launch of Mudamos, an Ethereum-based application for pushing qualifying law proposals to the chamber and encouraging civic participation in Brazil.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'http://github.com/',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'http://twitter.com/',
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
                        'about' => 'Software engineer and programming language design researcher',
                        'description' => 'Part of the Mist (Ethereum browser) team, Victor has been following the vision of bringing it to the masses. His work on Moon, a novel language for writing faster dApps, is a recent effort in this direction.',
                        'social' => [
                            [
                                'class' => 'github',
                                'url' => 'http://github.com/',
                            ],
                            [
                                'class' => 'twitter',
                                'url' => 'http://twitter.com/',
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