<?php
/**
 * Adds cities of Turkey to Magento2 website / Magento2 sitenize Türkiye şehirlerini ekler
 *
 * Copyright (C) 2016  Grinet
 * 
 * This file is part of Grinet/TurkeyCities.
 * 
 * Grinet/TurkeyCities is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Grinet\TurkeyCities\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(ModuleDataSetupInterface $setup,ModuleContextInterface $context) 
    {

        $this->lang_codes = array(
                                'tr_TR',
                                'en_US',
                                'en_GB',
                                'de_DE',
        );

        $data = [
            ['TR', '01', 'Adana'         ],
            ['TR', '02', 'Adıyaman'      ],
            ['TR', '03', 'Afyon'         ],
            ['TR', '04', 'Ağrı'          ],
            ['TR', '05', 'Amasya'        ],
            ['TR', '06', 'Ankara'        ],
            ['TR', '07', 'Antalya'       ],
            ['TR', '08', 'Artvin'        ],
            ['TR', '09', 'Aydın'         ],
            ['TR', '10', 'Balıkesir'     ],
            ['TR', '11', 'Bilecik'       ],
            ['TR', '12', 'Bingöl'        ],
            ['TR', '13', 'Bitlis'        ],
            ['TR', '14', 'Bolu'          ],
            ['TR', '15', 'Burdur'        ],
            ['TR', '16', 'Bursa'         ],
            ['TR', '17', 'Çanakkale'     ],
            ['TR', '18', 'Çankırı'       ],
            ['TR', '19', 'Çorum'         ],
            ['TR', '20', 'Denizli'       ],
            ['TR', '21', 'Diyarbakır'    ],
            ['TR', '22', 'Edirne'        ],
            ['TR', '23', 'Elazığ'        ],
            ['TR', '24', 'Erzincan'      ],
            ['TR', '25', 'Erzurum'       ],
            ['TR', '26', 'Eskişehir'     ],
            ['TR', '27', 'Gaziantep'     ],
            ['TR', '28', 'Giresun'       ],
            ['TR', '29', 'Gümüşhane'     ],
            ['TR', '30', 'Hakkari'       ],
            ['TR', '31', 'Hatay'         ],
            ['TR', '32', 'Isparta'       ],
            ['TR', '33', 'İçel'          ],
            ['TR', '34', 'İstanbul'      ],
            ['TR', '35', 'İzmir'         ],
            ['TR', '36', 'Kars'          ],
            ['TR', '37', 'Kastamonu'     ],
            ['TR', '38', 'Kayseri'       ],
            ['TR', '39', 'Kırklareli'    ],
            ['TR', '40', 'Kırşehir'      ],
            ['TR', '41', 'Kocaeli'       ],
            ['TR', '42', 'Konya'         ],
            ['TR', '43', 'Kütahya'       ],
            ['TR', '44', 'Malatya'       ],
            ['TR', '45', 'Manisa'        ],
            ['TR', '46', 'Kahramanmaraş' ],
            ['TR', '47', 'Mardin'        ],
            ['TR', '48', 'Muğla'         ],
            ['TR', '49', 'Muş'           ],
            ['TR', '50', 'Nevşehir'      ],
            ['TR', '51', 'Niğde'         ],
            ['TR', '52', 'Ordu'          ],
            ['TR', '53', 'Rize'          ],
            ['TR', '54', 'Sakarya'       ],
            ['TR', '55', 'Samsun'        ],
            ['TR', '56', 'Siirt'         ],
            ['TR', '57', 'Sinop'         ],
            ['TR', '58', 'Sivas'         ],
            ['TR', '59', 'Tekirdağ'      ],
            ['TR', '60', 'Tokat'         ],
            ['TR', '61', 'Trabzon'       ],
            ['TR', '62', 'Tunceli'       ],
            ['TR', '63', 'Şanlıurfa'     ],
            ['TR', '64', 'Uşak'          ],
            ['TR', '65', 'Van'           ],
            ['TR', '66', 'Yozgat'        ],
            ['TR', '67', 'Zonguldak'     ],
            ['TR', '68', 'Aksaray'       ],
            ['TR', '69', 'Bayburt'       ],
            ['TR', '70', 'Karaman'       ],
            ['TR', '71', 'Kırıkkale'     ],
            ['TR', '72', 'Batman'        ],
            ['TR', '73', 'Şırnak'        ],
            ['TR', '74', 'Bartın'        ],
            ['TR', '75', 'Ardahan'       ],
            ['TR', '76', 'Iğdır'         ],
            ['TR', '77', 'Yalova'        ],
            ['TR', '78', 'Karabük'       ],
            ['TR', '79', 'Kilis'         ],
            ['TR', '80', 'Osmaniye'      ],
            ['TR', '81', 'Düzce'         ],
        ];

        foreach ($data as $row) {
            $region_name = $row[2];
            $bind = ['country_id' => $row[0], 'code' => $row[1], 'default_name' => $this->tr2en($region_name)];
            $setup->getConnection()->insert($setup->getTable('directory_country_region'), $bind);

            $regionId = $setup->getConnection()->lastInsertId($setup->getTable('directory_country_region'));

            foreach ($this->lang_codes as $lang_code) 
            {    
                if ($lang_code != 'tr_TR') {
                    $region_name = $this->tr2en($region_name);
                } // if sonu
                
                $bind = ['locale' => $lang_code, 'region_id' => $regionId, 'name' => $region_name];
                $setup->getConnection()->insert($setup->getTable('directory_country_region_name'), $bind);

            } // foreach sonu
        } // foreach sonu

    }

    // #######################################################################################################
    public function tr2en($text) 
    {

        $trans=array(
         "Ç" => "C",
         "Ğ" => "G",
         "İ" => "I",
         "Ö" => "O",
         "Ş" => "S",
         "Ü" => "U",
         "ç" => "c",
         "ğ" => "g",
         "ı" => "i",
         "ö" => "o",
         "ş" => "s",
         "ü" => "u",
                    );
        
        return strtr($text, $trans);

    } // function sonu #######################################################################################


}
