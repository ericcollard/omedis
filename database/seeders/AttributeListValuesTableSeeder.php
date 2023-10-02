<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeListValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attribute_list_values')->delete();
        
        \DB::table('attribute_list_values')->insert(array (
            0 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Flotteur / Slalom',
                'created_at' => NULL,
                'id' => 1,
                'name' => 'Windsurf / Flotteur / Slalom',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            1 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Flotteur / Freerace',
                'created_at' => NULL,
                'id' => 2,
                'name' => 'Windsurf / Flotteur / Freerace',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            2 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Flotteur / Freeride',
                'created_at' => NULL,
                'id' => 3,
                'name' => 'Windsurf / Flotteur / Freeride',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            3 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Flotteur / Vague',
                'created_at' => NULL,
                'id' => 4,
                'name' => 'Windsurf / Flotteur / Vague',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            4 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Flotteur / Foil',
                'created_at' => NULL,
                'id' => 5,
                'name' => 'Windsurf / Flotteur / Foil',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            5 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Flotteur / Footstraps',
                'created_at' => NULL,
                'id' => 6,
                'name' => 'Windsurf / Flotteur / Footstraps',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            6 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Voile / Slalom',
                'created_at' => NULL,
                'id' => 7,
                'name' => 'Windsurf / Voile / Slalom',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            7 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Voile / Freerace',
                'created_at' => NULL,
                'id' => 8,
                'name' => 'Windsurf / Voile / Freerace',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            8 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Voile / Freeride',
                'created_at' => NULL,
                'id' => 9,
                'name' => 'Windsurf / Voile / Freeride',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            9 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Voile / Vague',
                'created_at' => NULL,
                'id' => 10,
                'name' => 'Windsurf / Voile / Vague',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            10 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Voile / Foil',
                'created_at' => NULL,
                'id' => 11,
                'name' => 'Windsurf / Voile / Foil',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            11 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Voile / Greement',
                'created_at' => NULL,
                'id' => 12,
                'name' => 'Windsurf / Voile / Greement',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            12 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Voile / Pièces',
                'created_at' => NULL,
                'id' => 13,
                'name' => 'Windsurf / Voile / Pièces',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            13 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Mat / SDM',
                'created_at' => NULL,
                'id' => 14,
                'name' => 'Windsurf / Mat / SDM',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            14 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Mat / RDM',
                'created_at' => NULL,
                'id' => 15,
                'name' => 'Windsurf / Mat / RDM',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            15 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Pied de mat / Plaquette',
                'created_at' => NULL,
                'id' => 16,
                'name' => 'Windsurf / Pied de mat / Plaquette',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            16 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Pied de mat / Rallonge SDM',
                'created_at' => NULL,
                'id' => 17,
                'name' => 'Windsurf / Pied de mat / Rallonge SDM',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            17 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Pied de mat / Rallonge RDM',
                'created_at' => NULL,
                'id' => 18,
                'name' => 'Windsurf / Pied de mat / Rallonge RDM',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            18 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Pied de mat / Pièces détachées',
                'created_at' => NULL,
                'id' => 19,
                'name' => 'Windsurf / Pied de mat / Pièces détachées',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            19 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Aileron / Tuttle',
                'created_at' => NULL,
                'id' => 20,
                'name' => 'Windsurf / Aileron / Tuttle',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            20 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Aileron / Powerbox',
                'created_at' => NULL,
                'id' => 21,
                'name' => 'Windsurf / Aileron / Powerbox',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            21 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Aileron / US',
                'created_at' => NULL,
                'id' => 22,
                'name' => 'Windsurf / Aileron / US',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            22 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Aileron / Slot',
                'created_at' => NULL,
                'id' => 23,
                'name' => 'Windsurf / Aileron / Slot',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            23 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Foil / Complet',
                'created_at' => NULL,
                'id' => 24,
                'name' => 'Windsurf / Foil / Complet',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            24 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Foil / Pièces',
                'created_at' => NULL,
                'id' => 25,
                'name' => 'Windsurf / Foil / Pièces',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            25 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Wishbone / Carbone',
                'created_at' => NULL,
                'id' => 26,
                'name' => 'Windsurf / Wishbone / Carbone',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            26 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Wishbone / Aluminium',
                'created_at' => NULL,
                'id' => 27,
                'name' => 'Windsurf / Wishbone / Aluminium',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            27 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Wishbone / Pièces détachées',
                'created_at' => NULL,
                'id' => 28,
                'name' => 'Windsurf / Wishbone / Pièces détachées',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            28 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / One Design',
                'created_at' => NULL,
                'id' => 29,
                'name' => 'Windsurf / One Design',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            29 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Lignes de harnais / Vario',
                'created_at' => NULL,
                'id' => 30,
                'name' => 'Windsurf / Lignes de harnais / Vario',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            30 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Windsurf / Lignes de harnais / Fixe',
                'created_at' => NULL,
                'id' => 31,
                'name' => 'Windsurf / Lignes de harnais / Fixe',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            31 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Kitesurf / Flotteur / Directionnel',
                'created_at' => NULL,
                'id' => 32,
                'name' => 'Kitesurf / Flotteur / Directionnel',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            32 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Kitesurf / Flotteur / Twintip',
                'created_at' => NULL,
                'id' => 33,
                'name' => 'Kitesurf / Flotteur / Twintip',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            33 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Kitesurf / Flotteur / Foil',
                'created_at' => NULL,
                'id' => 34,
                'name' => 'Kitesurf / Flotteur / Foil',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            34 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Kitesurf / Flotteur / Pièces détachées',
                'created_at' => NULL,
                'id' => 35,
                'name' => 'Kitesurf / Flotteur / Pièces détachées',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            35 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Kitesurf / Aile / Complete',
                'created_at' => NULL,
                'id' => 36,
                'name' => 'Kitesurf / Aile / Complete',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            36 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Kitesurf / Aile / Pièces et réparation',
                'created_at' => NULL,
                'id' => 37,
                'name' => 'Kitesurf / Aile / Pièces et réparation',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            37 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Kitesurf / Barre / Complete',
                'created_at' => NULL,
                'id' => 38,
                'name' => 'Kitesurf / Barre / Complete',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            38 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Kitesurf / Barre / Pièces détachées',
                'created_at' => NULL,
                'id' => 39,
                'name' => 'Kitesurf / Barre / Pièces détachées',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            39 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Kitesurf / Foil',
                'created_at' => NULL,
                'id' => 40,
                'name' => 'Kitesurf / Foil',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            40 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wingfoil / Flotteur',
                'created_at' => NULL,
                'id' => 41,
                'name' => 'Wingfoil / Flotteur',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            41 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wingfoil / Aile',
                'created_at' => NULL,
                'id' => 42,
                'name' => 'Wingfoil / Aile',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            42 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wingfoil / Foil',
                'created_at' => NULL,
                'id' => 43,
                'name' => 'Wingfoil / Foil',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            43 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wingfoil / Foil / Complet',
                'created_at' => NULL,
                'id' => 44,
                'name' => 'Wingfoil / Foil / Complet',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            44 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wingfoil / Foil / Pièces',
                'created_at' => NULL,
                'id' => 45,
                'name' => 'Wingfoil / Foil / Pièces',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            45 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wingfoil / Accessoires',
                'created_at' => NULL,
                'id' => 46,
                'name' => 'Wingfoil / Accessoires',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            46 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Sup & Surf / SUP / Rigide',
                'created_at' => NULL,
                'id' => 47,
                'name' => 'Sup & Surf / SUP / Rigide',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            47 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Sup & Surf / SUP / Gonflable',
                'created_at' => NULL,
                'id' => 48,
                'name' => 'Sup & Surf / SUP / Gonflable',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            48 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Sup & Surf / Board Surf',
                'created_at' => NULL,
                'id' => 49,
                'name' => 'Sup & Surf / Board Surf',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            49 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Sup & Surf / Dérive',
                'created_at' => NULL,
                'id' => 50,
                'name' => 'Sup & Surf / Dérive',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            50 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Sup & Surf / Bodyboard',
                'created_at' => NULL,
                'id' => 51,
                'name' => 'Sup & Surf / Bodyboard',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            51 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Sup & Surf / Pads',
                'created_at' => NULL,
                'id' => 52,
                'name' => 'Sup & Surf / Pads',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            52 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Sup & Surf / Pagaie',
                'created_at' => NULL,
                'id' => 53,
                'name' => 'Sup & Surf / Pagaie',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            53 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Sup & Surf / Wax',
                'created_at' => NULL,
                'id' => 54,
                'name' => 'Sup & Surf / Wax',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            54 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wakeboard / Planche',
                'created_at' => NULL,
                'id' => 55,
                'name' => 'Wakeboard / Planche',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            55 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wakeboard / Chausse',
                'created_at' => NULL,
                'id' => 56,
                'name' => 'Wakeboard / Chausse',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            56 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wakeboard / Pack',
                'created_at' => NULL,
                'id' => 57,
                'name' => 'Wakeboard / Pack',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            57 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wakeboard / Bouée',
                'created_at' => NULL,
                'id' => 58,
                'name' => 'Wakeboard / Bouée',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            58 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wakeboard / Accessoires',
                'created_at' => NULL,
                'id' => 59,
                'name' => 'Wakeboard / Accessoires',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            59 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wakeboard / Ski nautique',
                'created_at' => NULL,
                'id' => 60,
                'name' => 'Wakeboard / Ski nautique',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            60 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wakeboard / Occasion',
                'created_at' => NULL,
                'id' => 61,
                'name' => 'Wakeboard / Occasion',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            61 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Skis / True Racing',
                'created_at' => NULL,
                'id' => 62,
                'name' => 'Ski alpin / Skis / True Racing',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            62 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Skis / Piste',
                'created_at' => NULL,
                'id' => 63,
                'name' => 'Ski alpin / Skis / Piste',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            63 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Skis / All Mountain',
                'created_at' => NULL,
                'id' => 64,
                'name' => 'Ski alpin / Skis / All Mountain',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            64 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Skis / Freeride',
                'created_at' => NULL,
                'id' => 65,
                'name' => 'Ski alpin / Skis / Freeride',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            65 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Skis / Randonnée',
                'created_at' => NULL,
                'id' => 66,
                'name' => 'Ski alpin / Skis / Randonnée',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            66 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Skis / Junior',
                'created_at' => NULL,
                'id' => 67,
                'name' => 'Ski alpin / Skis / Junior',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            67 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Fixations / Alpine',
                'created_at' => NULL,
                'id' => 68,
                'name' => 'Ski alpin / Fixations / Alpine',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            68 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Fixations / Randonnée',
                'created_at' => NULL,
                'id' => 69,
                'name' => 'Ski alpin / Fixations / Randonnée',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            69 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Fixations / Pièces',
                'created_at' => NULL,
                'id' => 70,
                'name' => 'Ski alpin / Fixations / Pièces',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            70 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Chaussures / True Racing',
                'created_at' => NULL,
                'id' => 71,
                'name' => 'Ski alpin / Chaussures / True Racing',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            71 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Chaussures / Piste',
                'created_at' => NULL,
                'id' => 72,
                'name' => 'Ski alpin / Chaussures / Piste',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            72 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Chaussures / Randonnée',
                'created_at' => NULL,
                'id' => 73,
                'name' => 'Ski alpin / Chaussures / Randonnée',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            73 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Chaussures / Bootfitting',
                'created_at' => NULL,
                'id' => 74,
                'name' => 'Ski alpin / Chaussures / Bootfitting',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            74 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Entretien / Fart',
                'created_at' => NULL,
                'id' => 75,
                'name' => 'Ski alpin / Entretien / Fart',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            75 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Entretien / Outillage',
                'created_at' => NULL,
                'id' => 76,
                'name' => 'Ski alpin / Entretien / Outillage',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            76 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Peaux',
                'created_at' => NULL,
                'id' => 77,
                'name' => 'Ski alpin / Peaux',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            77 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Batons / Loisir',
                'created_at' => NULL,
                'id' => 78,
                'name' => 'Ski alpin / Batons / Loisir',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            78 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Ski alpin / Batons / True racing',
                'created_at' => NULL,
                'id' => 79,
                'name' => 'Ski alpin / Batons / True racing',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            79 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Snowboard / Plateau / Homme',
                'created_at' => NULL,
                'id' => 80,
                'name' => 'Snowboard / Plateau / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            80 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Snowboard / Plateau / Femme',
                'created_at' => NULL,
                'id' => 81,
                'name' => 'Snowboard / Plateau / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            81 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Snowboard / Fixations / Homme',
                'created_at' => NULL,
                'id' => 82,
                'name' => 'Snowboard / Fixations / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            82 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Snowboard / Fixations / Femme',
                'created_at' => NULL,
                'id' => 83,
                'name' => 'Snowboard / Fixations / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            83 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Snowboard / Pack / Homme',
                'created_at' => NULL,
                'id' => 84,
                'name' => 'Snowboard / Pack / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            84 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Snowboard / Pack / Femme',
                'created_at' => NULL,
                'id' => 85,
                'name' => 'Snowboard / Pack / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            85 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Snowboard / Pack / Enfant',
                'created_at' => NULL,
                'id' => 86,
                'name' => 'Snowboard / Pack / Enfant',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            86 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Snowboard / Boots / Homme',
                'created_at' => NULL,
                'id' => 87,
                'name' => 'Snowboard / Boots / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            87 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Snowboard / Boots / Femme',
                'created_at' => NULL,
                'id' => 88,
                'name' => 'Snowboard / Boots / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            88 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Snowboard / Split et Randonnée',
                'created_at' => NULL,
                'id' => 89,
                'name' => 'Snowboard / Split et Randonnée',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            89 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Snowboard / Pièces détachées',
                'created_at' => NULL,
                'id' => 90,
                'name' => 'Snowboard / Pièces détachées',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            90 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Harnais / Ceinture',
                'created_at' => NULL,
                'id' => 91,
                'name' => 'Equipement / Harnais / Ceinture',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            91 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Harnais / Culotte',
                'created_at' => NULL,
                'id' => 92,
                'name' => 'Equipement / Harnais / Culotte',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            92 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Harnais / Pièces',
                'created_at' => NULL,
                'id' => 93,
                'name' => 'Equipement / Harnais / Pièces',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            93 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Leash / Board',
                'created_at' => NULL,
                'id' => 94,
                'name' => 'Equipement / Leash / Board',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            94 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Leash / Wing',
                'created_at' => NULL,
                'id' => 95,
                'name' => 'Equipement / Leash / Wing',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            95 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Leash / Aile',
                'created_at' => NULL,
                'id' => 96,
                'name' => 'Equipement / Leash / Aile',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            96 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Protection / Nautique / Gilets d impact',
                'created_at' => NULL,
                'id' => 97,
                'name' => 'Equipement / Protection / Nautique / Gilets d impact',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            97 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Protection / Nautique / Lunettes',
                'created_at' => NULL,
                'id' => 98,
                'name' => 'Equipement / Protection / Nautique / Lunettes',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            98 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Protection / Nautique / Crème solaire',
                'created_at' => NULL,
                'id' => 99,
                'name' => 'Equipement / Protection / Nautique / Crème solaire',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            99 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Protection / Nautique / Casque',
                'created_at' => NULL,
                'id' => 100,
                'name' => 'Equipement / Protection / Nautique / Casque',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            100 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Protection / Nautique / Occasion',
                'created_at' => NULL,
                'id' => 101,
                'name' => 'Equipement / Protection / Nautique / Occasion',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            101 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Protection / Hivers / Dorsale',
                'created_at' => NULL,
                'id' => 102,
                'name' => 'Equipement / Protection / Hivers / Dorsale',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            102 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Protection / Hivers / Masque',
                'created_at' => NULL,
                'id' => 103,
                'name' => 'Equipement / Protection / Hivers / Masque',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            103 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Protection / Hivers / True Racing',
                'created_at' => NULL,
                'id' => 104,
                'name' => 'Equipement / Protection / Hivers / True Racing',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            104 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Protection / Hivers / Casque / Loisir',
                'created_at' => NULL,
                'id' => 105,
                'name' => 'Equipement / Protection / Hivers / Casque / Loisir',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            105 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Protection / Hivers / Casque / True racing',
                'created_at' => NULL,
                'id' => 106,
                'name' => 'Equipement / Protection / Hivers / Casque / True racing',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            106 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Intégrale / Homme',
                'created_at' => NULL,
                'id' => 107,
                'name' => 'Equipement / Néoprène / Intégrale / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            107 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Intégrale / Femme',
                'created_at' => NULL,
                'id' => 108,
                'name' => 'Equipement / Néoprène / Intégrale / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            108 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Intégrale / Enfant',
                'created_at' => NULL,
                'id' => 109,
                'name' => 'Equipement / Néoprène / Intégrale / Enfant',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            109 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Manche courte / Homme',
                'created_at' => NULL,
                'id' => 110,
                'name' => 'Equipement / Néoprène / Manche courte / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            110 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Manche courte / Femme',
                'created_at' => NULL,
                'id' => 111,
                'name' => 'Equipement / Néoprène / Manche courte / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            111 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Manche courte / Enfant',
                'created_at' => NULL,
                'id' => 112,
                'name' => 'Equipement / Néoprène / Manche courte / Enfant',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            112 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Shorty / Homme',
                'created_at' => NULL,
                'id' => 113,
                'name' => 'Equipement / Néoprène / Shorty / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            113 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Shorty / Femme',
                'created_at' => NULL,
                'id' => 114,
                'name' => 'Equipement / Néoprène / Shorty / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            114 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Shorty / Enfant',
                'created_at' => NULL,
                'id' => 115,
                'name' => 'Equipement / Néoprène / Shorty / Enfant',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            115 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Top / Homme',
                'created_at' => NULL,
                'id' => 116,
                'name' => 'Equipement / Néoprène / Top / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            116 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Top / Femme',
                'created_at' => NULL,
                'id' => 117,
                'name' => 'Equipement / Néoprène / Top / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            117 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Top / Enfant',
                'created_at' => NULL,
                'id' => 118,
                'name' => 'Equipement / Néoprène / Top / Enfant',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            118 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Bonnet et gants',
                'created_at' => NULL,
                'id' => 119,
                'name' => 'Equipement / Néoprène / Bonnet et gants',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            119 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Chaussons',
                'created_at' => NULL,
                'id' => 120,
                'name' => 'Equipement / Néoprène / Chaussons',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            120 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Néoprène / Poncho',
                'created_at' => NULL,
                'id' => 121,
                'name' => 'Equipement / Néoprène / Poncho',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            121 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Vêtements',
                'created_at' => NULL,
                'id' => 122,
                'name' => 'Equipement / Vêtements',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            122 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / Sweat / Homme',
                'created_at' => NULL,
                'id' => 123,
                'name' => 'Wear / Mode / Sweat / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            123 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / Sweat / Femme',
                'created_at' => NULL,
                'id' => 124,
                'name' => 'Wear / Mode / Sweat / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            124 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / Sweat / Enfant',
                'created_at' => NULL,
                'id' => 125,
                'name' => 'Wear / Mode / Sweat / Enfant',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            125 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / Pantalon / Homme',
                'created_at' => NULL,
                'id' => 126,
                'name' => 'Wear / Mode / Pantalon / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            126 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / Pantalon / Femme',
                'created_at' => NULL,
                'id' => 127,
                'name' => 'Wear / Mode / Pantalon / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            127 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / Pantalon / Enfant',
                'created_at' => NULL,
                'id' => 128,
                'name' => 'Wear / Mode / Pantalon / Enfant',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            128 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / Short / Homme',
                'created_at' => NULL,
                'id' => 129,
                'name' => 'Wear / Mode / Short / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            129 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / Short / Femme',
                'created_at' => NULL,
                'id' => 130,
                'name' => 'Wear / Mode / Short / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            130 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / Short / Enfant',
                'created_at' => NULL,
                'id' => 131,
                'name' => 'Wear / Mode / Short / Enfant',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            131 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / T shirt / Homme',
                'created_at' => NULL,
                'id' => 132,
                'name' => 'Wear / Mode / T shirt / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            132 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / T shirt / Femme',
                'created_at' => NULL,
                'id' => 133,
                'name' => 'Wear / Mode / T shirt / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            133 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / T shirt / Enfant',
                'created_at' => NULL,
                'id' => 134,
                'name' => 'Wear / Mode / T shirt / Enfant',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            134 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / Accessoires ',
                'created_at' => NULL,
                'id' => 135,
                'name' => 'Wear / Mode / Accessoires ',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            135 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Mode / Casquette',
                'created_at' => NULL,
                'id' => 136,
                'name' => 'Wear / Mode / Casquette',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            136 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / Veste / Homme',
                'created_at' => NULL,
                'id' => 137,
                'name' => 'Wear / Technique / Veste / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            137 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / Veste / Femme',
                'created_at' => NULL,
                'id' => 138,
                'name' => 'Wear / Technique / Veste / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            138 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / Veste / Enfant',
                'created_at' => NULL,
                'id' => 139,
                'name' => 'Wear / Technique / Veste / Enfant',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            139 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / Pantalon / Homme',
                'created_at' => NULL,
                'id' => 140,
                'name' => 'Wear / Technique / Pantalon / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            140 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / Pantalon / Femme',
                'created_at' => NULL,
                'id' => 141,
                'name' => 'Wear / Technique / Pantalon / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            141 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / Pantalon / Enfant',
                'created_at' => NULL,
                'id' => 142,
                'name' => 'Wear / Technique / Pantalon / Enfant',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            142 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / Sous-vetement / Homme',
                'created_at' => NULL,
                'id' => 143,
                'name' => 'Wear / Technique / Sous-vetement / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            143 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / Sous-vetement / Femme',
                'created_at' => NULL,
                'id' => 144,
                'name' => 'Wear / Technique / Sous-vetement / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            144 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / Sous-vetement / Enfant',
                'created_at' => NULL,
                'id' => 145,
                'name' => 'Wear / Technique / Sous-vetement / Enfant',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            145 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / 2e couche / Homme',
                'created_at' => NULL,
                'id' => 146,
                'name' => 'Wear / Technique / 2e couche / Homme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            146 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / 2e couche / Femme',
                'created_at' => NULL,
                'id' => 147,
                'name' => 'Wear / Technique / 2e couche / Femme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            147 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / 2e couche / Enfant',
                'created_at' => NULL,
                'id' => 148,
                'name' => 'Wear / Technique / 2e couche / Enfant',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            148 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / Chaussettes',
                'created_at' => NULL,
                'id' => 149,
                'name' => 'Wear / Technique / Chaussettes',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            149 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / Gants / True Racing',
                'created_at' => NULL,
                'id' => 150,
                'name' => 'Wear / Technique / Gants / True Racing',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            150 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / Gants / Loisir',
                'created_at' => NULL,
                'id' => 151,
                'name' => 'Wear / Technique / Gants / Loisir',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            151 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Technique / Bonnet',
                'created_at' => NULL,
                'id' => 152,
                'name' => 'Wear / Technique / Bonnet',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            152 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Racing / Veste',
                'created_at' => NULL,
                'id' => 153,
                'name' => 'Wear / Racing / Veste',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            153 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Racing / Pantalon et short',
                'created_at' => NULL,
                'id' => 154,
                'name' => 'Wear / Racing / Pantalon et short',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            154 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Wear / Racing / Combinaison',
                'created_at' => NULL,
                'id' => 155,
                'name' => 'Wear / Racing / Combinaison',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            155 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Sécurité ski',
                'created_at' => NULL,
                'id' => 156,
                'name' => 'Equipement / Sécurité ski',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            156 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Sécurité ski occasion',
                'created_at' => NULL,
                'id' => 157,
                'name' => 'Equipement / Sécurité ski occasion',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            157 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Equipement / Electronique',
                'created_at' => NULL,
                'id' => 158,
                'name' => 'Equipement / Electronique',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            158 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Bagagerie / Housse planche windsurf',
                'created_at' => NULL,
                'id' => 159,
                'name' => 'Bagagerie / Housse planche windsurf',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            159 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Bagagerie / Housse planche windfoil',
                'created_at' => NULL,
                'id' => 160,
                'name' => 'Bagagerie / Housse planche windfoil',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            160 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Bagagerie / Housse planche surf',
                'created_at' => NULL,
                'id' => 161,
                'name' => 'Bagagerie / Housse planche surf',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            161 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Bagagerie / Housse planche Wing',
                'created_at' => NULL,
                'id' => 162,
                'name' => 'Bagagerie / Housse planche Wing',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            162 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Bagagerie / Housse planche kite',
                'created_at' => NULL,
                'id' => 163,
                'name' => 'Bagagerie / Housse planche kite',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            163 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Bagagerie / Housse wake',
                'created_at' => NULL,
                'id' => 164,
                'name' => 'Bagagerie / Housse wake',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            164 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Bagagerie / Housse Ski',
                'created_at' => NULL,
                'id' => 165,
                'name' => 'Bagagerie / Housse Ski',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            165 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Bagagerie / Housse Snow',
                'created_at' => NULL,
                'id' => 166,
                'name' => 'Bagagerie / Housse Snow',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            166 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Bagagerie / Ski Racing',
                'created_at' => NULL,
                'id' => 167,
                'name' => 'Bagagerie / Ski Racing',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            167 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Bagagerie / Pochette Etanche',
                'created_at' => NULL,
                'id' => 168,
                'name' => 'Bagagerie / Pochette Etanche',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            168 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Bagagerie / Sac a dos',
                'created_at' => NULL,
                'id' => 169,
                'name' => 'Bagagerie / Sac a dos',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            169 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Bagagerie / Housse foil',
                'created_at' => NULL,
                'id' => 170,
                'name' => 'Bagagerie / Housse foil',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            170 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Outillage et visserie / Visserie',
                'created_at' => NULL,
                'id' => 171,
                'name' => 'Outillage et visserie / Visserie',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            171 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Outillage et visserie / Inserts',
                'created_at' => NULL,
                'id' => 172,
                'name' => 'Outillage et visserie / Inserts',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            172 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Outillage et visserie / Bout',
                'created_at' => NULL,
                'id' => 173,
                'name' => 'Outillage et visserie / Bout',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            173 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Outillage et visserie / Pompe',
                'created_at' => NULL,
                'id' => 174,
                'name' => 'Outillage et visserie / Pompe',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            174 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Outillage et visserie / Outillage',
                'created_at' => NULL,
                'id' => 175,
                'name' => 'Outillage et visserie / Outillage',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            175 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Abricot #e67e30',
                'created_at' => NULL,
                'id' => 176,
                'name' => 'Abricot',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            176 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Acajou #88421d',
                'created_at' => NULL,
                'id' => 177,
                'name' => 'Acajou',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            177 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Aigue-marine #79f8f8',
                'created_at' => NULL,
                'id' => 178,
                'name' => 'Aigue-marine',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            178 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Alezan #a76726',
                'created_at' => NULL,
                'id' => 179,
                'name' => 'Alezan',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            179 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Amande #82c46c',
                'created_at' => NULL,
                'id' => 180,
                'name' => 'Amande',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            180 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Amarante #91283b',
                'created_at' => NULL,
                'id' => 181,
                'name' => 'Amarante',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            181 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Ambre #f0c300',
                'created_at' => NULL,
                'id' => 182,
                'name' => 'Ambre',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            182 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Améthyste #884da7',
                'created_at' => NULL,
                'id' => 183,
                'name' => 'Améthyste',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            183 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Anthracite #303030',
                'created_at' => NULL,
                'id' => 184,
                'name' => 'Anthracite',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            184 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Ardoise #5a5e6b',
                'created_at' => NULL,
                'id' => 185,
                'name' => 'Ardoise',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            185 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Aubergine #370028',
                'created_at' => NULL,
                'id' => 186,
                'name' => 'Aubergine',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            186 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Auburn #9d3e0c',
                'created_at' => NULL,
                'id' => 187,
                'name' => 'Auburn',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            187 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Aurore #ffcb60',
                'created_at' => NULL,
                'id' => 188,
                'name' => 'Aurore',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            188 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Avocat #568203',
                'created_at' => NULL,
                'id' => 189,
                'name' => 'Avocat',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            189 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Azur #007fff',
                'created_at' => NULL,
                'id' => 190,
                'name' => 'Azur',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            190 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Beige ou Bureau #c8ad7f',
                'created_at' => NULL,
                'id' => 191,
                'name' => 'Beige ou Bureau',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            191 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Beurre #f0e36b',
                'created_at' => NULL,
                'id' => 192,
                'name' => 'Beurre',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            192 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bis #766f64',
                'created_at' => NULL,
                'id' => 193,
                'name' => 'Bis',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            193 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bisque #ffe4c4',
                'created_at' => NULL,
                'id' => 194,
                'name' => 'Bisque',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            194 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bistre #856d4d',
                'created_at' => NULL,
                'id' => 195,
                'name' => 'Bistre',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            195 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bitume #4e3d28',
                'created_at' => NULL,
                'id' => 196,
                'name' => 'Bitume',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            196 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Blanc #ffffff',
                'created_at' => NULL,
                'id' => 197,
                'name' => 'Blanc',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            197 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Blanc cassé #fefee2',
                'created_at' => NULL,
                'id' => 198,
                'name' => 'Blanc cassé',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            198 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Blanc lunaire #f4fefe',
                'created_at' => NULL,
                'id' => 199,
                'name' => 'Blanc lunaire',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            199 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Blé #e8d630',
                'created_at' => NULL,
                'id' => 200,
                'name' => 'Blé',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            200 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu #0080ff',
                'created_at' => NULL,
                'id' => 201,
                'name' => 'Bleu',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            201 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu acier #3a8eba',
                'created_at' => NULL,
                'id' => 202,
                'name' => 'Bleu acier',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            202 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu barbeau #5472ae',
                'created_at' => NULL,
                'id' => 203,
                'name' => 'Bleu barbeau',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            203 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu canard #048b9a',
                'created_at' => NULL,
                'id' => 204,
                'name' => 'Bleu canard',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            204 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu céleste #26c4ec',
                'created_at' => NULL,
                'id' => 205,
                'name' => 'Bleu céleste',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            205 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu charrette #8ea2c6',
                'created_at' => NULL,
                'id' => 206,
                'name' => 'Bleu charrette',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            206 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu ciel #77b5fe',
                'created_at' => NULL,
                'id' => 207,
                'name' => 'Bleu ciel',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            207 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu de cobalt #22427c',
                'created_at' => NULL,
                'id' => 208,
                'name' => 'Bleu de cobalt',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            208 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu de Prusse #24445c',
                'created_at' => NULL,
                'id' => 209,
                'name' => 'Bleu de Prusse',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            209 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu électrique #2c75ff',
                'created_at' => NULL,
                'id' => 210,
                'name' => 'Bleu électrique',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            210 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu givré #80d0d0',
                'created_at' => NULL,
                'id' => 211,
                'name' => 'Bleu givré',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            211 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu Klein #002fa7',
                'created_at' => NULL,
                'id' => 212,
                'name' => 'Bleu Klein',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            212 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu Majorelle #6050dc',
                'created_at' => NULL,
                'id' => 213,
                'name' => 'Bleu Majorelle',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            213 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu marine #03224c',
                'created_at' => NULL,
                'id' => 214,
                'name' => 'Bleu marine',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            214 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu nuit #0f056b',
                'created_at' => NULL,
                'id' => 215,
                'name' => 'Bleu nuit',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            215 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu outremer #1b019b',
                'created_at' => NULL,
                'id' => 216,
                'name' => 'Bleu outremer',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            216 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu paon #067790',
                'created_at' => NULL,
                'id' => 217,
                'name' => 'Bleu paon',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            217 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu Persan #6600ff',
                'created_at' => NULL,
                'id' => 218,
                'name' => 'Bleu Persan',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            218 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu pétrole #1d4851',
                'created_at' => NULL,
                'id' => 219,
                'name' => 'Bleu pétrole',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            219 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu roi ou de France #318ce7',
                'created_at' => NULL,
                'id' => 220,
                'name' => 'Bleu roi ou de France',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            220 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bleu turquin #425b8a',
                'created_at' => NULL,
                'id' => 221,
                'name' => 'Bleu turquin',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            221 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Blond #e2bc74',
                'created_at' => NULL,
                'id' => 222,
                'name' => 'Blond',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            222 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Blond vénitien #e7a854',
                'created_at' => NULL,
                'id' => 223,
                'name' => 'Blond vénitien',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            223 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bordeaux #6d071a',
                'created_at' => NULL,
                'id' => 224,
                'name' => 'Bordeaux',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            224 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bouton d\'or #fcdc12',
                'created_at' => NULL,
                'id' => 225,
                'name' => 'Bouton d\'or',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            225 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Brique #842e1b',
                'created_at' => NULL,
                'id' => 226,
                'name' => 'Brique',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            226 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Bronze #614e1a',
                'created_at' => NULL,
                'id' => 227,
                'name' => 'Bronze',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            227 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Brou de noix #3f2204',
                'created_at' => NULL,
                'id' => 228,
                'name' => 'Brou de noix',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            228 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Brun #5b3c11',
                'created_at' => NULL,
                'id' => 229,
                'name' => 'Brun',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            229 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Caca d\'oie #cdcd0d',
                'created_at' => NULL,
                'id' => 230,
                'name' => 'Caca d\'oie',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            230 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Cacao #614b3a',
                'created_at' => NULL,
                'id' => 231,
                'name' => 'Cacao',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            231 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Cachou #2f1b0c',
                'created_at' => NULL,
                'id' => 232,
                'name' => 'Cachou',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            232 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Cæruleum #357ab7',
                'created_at' => NULL,
                'id' => 233,
                'name' => 'Cæruleum',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            233 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Café #462e01',
                'created_at' => NULL,
                'id' => 234,
                'name' => 'Café',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            234 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Café au lait #785e2f',
                'created_at' => NULL,
                'id' => 235,
                'name' => 'Café au lait',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            235 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Cannelle #7e5835',
                'created_at' => NULL,
                'id' => 236,
                'name' => 'Cannelle',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            236 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Capucine #ff5e4d',
                'created_at' => NULL,
                'id' => 237,
                'name' => 'Capucine',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            237 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Caramel #7e3300',
                'created_at' => NULL,
                'id' => 238,
                'name' => 'Caramel',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            238 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Carmin #960018',
                'created_at' => NULL,
                'id' => 239,
                'name' => 'Carmin',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            239 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Carmin d\'alizarine #b31f2f',
                'created_at' => NULL,
                'id' => 240,
                'name' => 'Carmin d\'alizarine',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            240 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Carotte #f4661b',
                'created_at' => NULL,
                'id' => 241,
                'name' => 'Carotte',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            241 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Chamois #d0c07a',
                'created_at' => NULL,
                'id' => 242,
                'name' => 'Chamois',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            242 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Chartreuse #7fff00',
                'created_at' => NULL,
                'id' => 243,
                'name' => 'Chartreuse',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            243 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Châtain #8b6c42',
                'created_at' => NULL,
                'id' => 244,
                'name' => 'Châtain',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            244 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Chaudron #85530f',
                'created_at' => NULL,
                'id' => 245,
                'name' => 'Chaudron',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            245 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Chocolat #5a3a22',
                'created_at' => NULL,
                'id' => 246,
                'name' => 'Chocolat',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            246 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Citrouille #df6d14',
                'created_at' => NULL,
                'id' => 247,
                'name' => 'Citrouille',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            247 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Coquelicot #c60800',
                'created_at' => NULL,
                'id' => 248,
                'name' => 'Coquelicot',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            248 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Coquille d\'œuf #fde9e0',
                'created_at' => NULL,
                'id' => 249,
                'name' => 'Coquille d\'œuf',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            249 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Corail #e73e01',
                'created_at' => NULL,
                'id' => 250,
                'name' => 'Corail',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            250 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Cramoisi #dc143c',
                'created_at' => NULL,
                'id' => 251,
                'name' => 'Cramoisi',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            251 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Crème #fdf1b8',
                'created_at' => NULL,
                'id' => 252,
                'name' => 'Crème',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            252 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Cuisse de nymphe #fee7f0',
                'created_at' => NULL,
                'id' => 253,
                'name' => 'Cuisse de nymphe',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            253 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Cuivre #b36700',
                'created_at' => NULL,
                'id' => 254,
                'name' => 'Cuivre',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            254 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Cyan #2bfafa',
                'created_at' => NULL,
                'id' => 255,
                'name' => 'Cyan',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            255 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Écarlate #ed0000',
                'created_at' => NULL,
                'id' => 256,
                'name' => 'Écarlate',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            256 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Écru #fefee0',
                'created_at' => NULL,
                'id' => 257,
                'name' => 'Écru',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            257 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Émeraude #01d758',
                'created_at' => NULL,
                'id' => 258,
                'name' => 'Émeraude',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            258 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Flave #e6e697',
                'created_at' => NULL,
                'id' => 259,
                'name' => 'Flave',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            259 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Fraise #bf3030',
                'created_at' => NULL,
                'id' => 260,
                'name' => 'Fraise',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            260 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Fraise écrasée #a42424',
                'created_at' => NULL,
                'id' => 261,
                'name' => 'Fraise écrasée',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            261 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Framboise #c72c48',
                'created_at' => NULL,
                'id' => 262,
                'name' => 'Framboise',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            262 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Fuchsia #fd3f92',
                'created_at' => NULL,
                'id' => 263,
                'name' => 'Fuchsia',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            263 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Fumée #bbd2e1',
                'created_at' => NULL,
                'id' => 264,
                'name' => 'Fumée',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            264 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Garance #ee1010',
                'created_at' => NULL,
                'id' => 265,
                'name' => 'Garance',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            265 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Glauque #649b88',
                'created_at' => NULL,
                'id' => 266,
                'name' => 'Glauque',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            266 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Glycine #c9a0dc',
                'created_at' => NULL,
                'id' => 267,
                'name' => 'Glycine',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            267 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Grège #bbae98',
                'created_at' => NULL,
                'id' => 268,
                'name' => 'Grège',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            268 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Grenadine #e9383f',
                'created_at' => NULL,
                'id' => 269,
                'name' => 'Grenadine',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            269 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Grenat #6e0b14',
                'created_at' => NULL,
                'id' => 270,
                'name' => 'Grenat',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            270 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Gris #606060',
                'created_at' => NULL,
                'id' => 271,
                'name' => 'Gris',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            271 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Gris acier #afafaf',
                'created_at' => NULL,
                'id' => 272,
                'name' => 'Gris acier',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            272 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Gris de Payne #677179',
                'created_at' => NULL,
                'id' => 273,
                'name' => 'Gris de Payne',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            273 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Gris fer #7f7f7f',
                'created_at' => NULL,
                'id' => 274,
                'name' => 'Gris fer',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            274 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Gris perle #cecece',
                'created_at' => NULL,
                'id' => 275,
                'name' => 'Gris perle',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            275 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Groseille #cf0a1d',
                'created_at' => NULL,
                'id' => 276,
                'name' => 'Groseille',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            276 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Guède #56739a',
                'created_at' => NULL,
                'id' => 277,
                'name' => 'Guède',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            277 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Gueules #e21313',
                'created_at' => NULL,
                'id' => 278,
                'name' => 'Gueules',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            278 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Héliotrope #df73ff',
                'created_at' => NULL,
                'id' => 279,
                'name' => 'Héliotrope',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            279 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Incarnat #ff6f7d',
                'created_at' => NULL,
                'id' => 280,
                'name' => 'Incarnat',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            280 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Indigo #2e006c',
                'created_at' => NULL,
                'id' => 281,
                'name' => 'Indigo',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            281 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Ivoire #ffffd4',
                'created_at' => NULL,
                'id' => 282,
                'name' => 'Ivoire',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            282 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Jaune #ffff00',
                'created_at' => NULL,
                'id' => 283,
                'name' => 'Jaune',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            283 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Jaune canari #e7f00d',
                'created_at' => NULL,
                'id' => 284,
                'name' => 'Jaune canari',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            284 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Jaune citron #f7ff3c',
                'created_at' => NULL,
                'id' => 285,
                'name' => 'Jaune citron',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            285 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Jaune d\'or #efd807',
                'created_at' => NULL,
                'id' => 286,
                'name' => 'Jaune d\'or',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            286 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Jaune de cobalt #fdee00',
                'created_at' => NULL,
                'id' => 287,
                'name' => 'Jaune de cobalt',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            287 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Jaune de Mars #eed153',
                'created_at' => NULL,
                'id' => 288,
                'name' => 'Jaune de Mars',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            288 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Jaune de Naples #fff0bc',
                'created_at' => NULL,
                'id' => 289,
                'name' => 'Jaune de Naples',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            289 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Jaune impérial #ffe436',
                'created_at' => NULL,
                'id' => 290,
                'name' => 'Jaune impérial',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            290 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Jaune mimosa #fef86c',
                'created_at' => NULL,
                'id' => 291,
                'name' => 'Jaune mimosa',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            291 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Kaki #94812b',
                'created_at' => NULL,
                'id' => 292,
                'name' => 'Kaki',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            292 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Lapis-lazuli #26619c',
                'created_at' => NULL,
                'id' => 293,
                'name' => 'Lapis-lazuli',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            293 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Lavallière #8f5922',
                'created_at' => NULL,
                'id' => 294,
                'name' => 'Lavallière',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            294 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Lavande #9683ec',
                'created_at' => NULL,
                'id' => 295,
                'name' => 'Lavande',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            295 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Lie de vin #ac1e44',
                'created_at' => NULL,
                'id' => 296,
                'name' => 'Lie de vin',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            296 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Lilas #b666d2',
                'created_at' => NULL,
                'id' => 297,
                'name' => 'Lilas',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            297 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Lin #faf0e6',
                'created_at' => NULL,
                'id' => 298,
                'name' => 'Lin',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            298 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Magenta #db0073',
                'created_at' => NULL,
                'id' => 299,
                'name' => 'Magenta',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            299 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Maïs #ffde75',
                'created_at' => NULL,
                'id' => 300,
                'name' => 'Maïs',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            300 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Malachite #1fa055',
                'created_at' => NULL,
                'id' => 301,
                'name' => 'Malachite',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            301 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Mandarine #fea347',
                'created_at' => NULL,
                'id' => 302,
                'name' => 'Mandarine',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            302 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Marron #582900',
                'created_at' => NULL,
                'id' => 303,
                'name' => 'Marron',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            303 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Mastic #b3b191',
                'created_at' => NULL,
                'id' => 304,
                'name' => 'Mastic',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            304 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Mauve #d473d4',
                'created_at' => NULL,
                'id' => 305,
                'name' => 'Mauve',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            305 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Menthe #16b84e',
                'created_at' => NULL,
                'id' => 306,
                'name' => 'Menthe',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            306 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Moutarde #c7cf00',
                'created_at' => NULL,
                'id' => 307,
                'name' => 'Moutarde',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            307 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Nacarat #fc5d5d',
                'created_at' => NULL,
                'id' => 308,
                'name' => 'Nacarat',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            308 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Nankin #f7e269',
                'created_at' => NULL,
                'id' => 309,
                'name' => 'Nankin',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            309 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Noir #000000',
                'created_at' => NULL,
                'id' => 310,
                'name' => 'Noir',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            310 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Noir d\'aniline #120d16',
                'created_at' => NULL,
                'id' => 311,
                'name' => 'Noir d\'aniline',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            311 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Noir de carbone #130e0a',
                'created_at' => NULL,
                'id' => 312,
                'name' => 'Noir de carbone',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            312 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Noisette #955628',
                'created_at' => NULL,
                'id' => 313,
                'name' => 'Noisette',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            313 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Ocre #dfaf2c',
                'created_at' => NULL,
                'id' => 314,
                'name' => 'Ocre',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            314 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Ocre rouge #dd985c',
                'created_at' => NULL,
                'id' => 315,
                'name' => 'Ocre rouge',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            315 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Olive #708d23',
                'created_at' => NULL,
                'id' => 316,
                'name' => 'Olive',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            316 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Or #ffd700',
                'created_at' => NULL,
                'id' => 317,
                'name' => 'Or',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            317 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Orange #ff7f00',
                'created_at' => NULL,
                'id' => 318,
                'name' => 'Orange',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            318 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Orange brûlé #cc5500',
                'created_at' => NULL,
                'id' => 319,
                'name' => 'Orange brûlé',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            319 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Orchidée #da70d6',
                'created_at' => NULL,
                'id' => 320,
                'name' => 'Orchidée',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            320 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Orpiment #fcd21c',
                'created_at' => NULL,
                'id' => 321,
                'name' => 'Orpiment',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            321 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Parme #cfa0e9',
                'created_at' => NULL,
                'id' => 322,
                'name' => 'Parme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            322 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Pelure d\'oignon #d58490',
                'created_at' => NULL,
                'id' => 323,
                'name' => 'Pelure d\'oignon',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            323 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Pervenche #ccccff',
                'created_at' => NULL,
                'id' => 324,
                'name' => 'Pervenche',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            324 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Pistache #bef574',
                'created_at' => NULL,
                'id' => 325,
                'name' => 'Pistache',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            325 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Poil de chameau #b67823',
                'created_at' => NULL,
                'id' => 326,
                'name' => 'Poil de chameau',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            326 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Pourpre #9e0e40',
                'created_at' => NULL,
                'id' => 327,
                'name' => 'Pourpre',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            327 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Prune #811453',
                'created_at' => NULL,
                'id' => 328,
                'name' => 'Prune',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            328 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Puce #4e1609',
                'created_at' => NULL,
                'id' => 329,
                'name' => 'Puce',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            329 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Rose #fd6c9e',
                'created_at' => NULL,
                'id' => 330,
                'name' => 'Rose',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            330 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Rose Mountbatten #997a8d',
                'created_at' => NULL,
                'id' => 331,
                'name' => 'Rose Mountbatten',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            331 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Rouge #f00020',
                'created_at' => NULL,
                'id' => 332,
                'name' => 'Rouge',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            332 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Rouge anglais #f7230c',
                'created_at' => NULL,
                'id' => 333,
                'name' => 'Rouge anglais',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            333 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Rouge cardinal #b82010',
                'created_at' => NULL,
                'id' => 334,
                'name' => 'Rouge cardinal',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            334 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Rouge cerise #bb0b0b',
                'created_at' => NULL,
                'id' => 335,
                'name' => 'Rouge cerise',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            335 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Rouge d\'Andrinople #a91101',
                'created_at' => NULL,
                'id' => 336,
                'name' => 'Rouge d\'Andrinople',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            336 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Rouge de Falun #801818',
                'created_at' => NULL,
                'id' => 337,
                'name' => 'Rouge de Falun',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            337 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Rouge feu #fe1b00',
                'created_at' => NULL,
                'id' => 338,
                'name' => 'Rouge feu',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            338 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Rouge sang #850606',
                'created_at' => NULL,
                'id' => 339,
                'name' => 'Rouge sang',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            339 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Rouge tomette #ae4a34',
                'created_at' => NULL,
                'id' => 340,
                'name' => 'Rouge tomette',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            340 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Rouille #985717',
                'created_at' => NULL,
                'id' => 341,
                'name' => 'Rouille',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            341 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Roux #ad4f09',
                'created_at' => NULL,
                'id' => 342,
                'name' => 'Roux',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            342 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Rubis #e0115f',
                'created_at' => NULL,
                'id' => 343,
                'name' => 'Rubis',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            343 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Sable #e0cda9',
                'created_at' => NULL,
                'id' => 344,
                'name' => 'Sable',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            344 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Sang de bœuf #730800',
                'created_at' => NULL,
                'id' => 345,
                'name' => 'Sang de bœuf',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            345 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Saphir #0131b4',
                'created_at' => NULL,
                'id' => 346,
                'name' => 'Saphir',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            346 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Sarcelle #008e8e',
                'created_at' => NULL,
                'id' => 347,
                'name' => 'Sarcelle',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            347 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Saumon #f88e55',
                'created_at' => NULL,
                'id' => 348,
                'name' => 'Saumon',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            348 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Sépia #ae8964',
                'created_at' => NULL,
                'id' => 349,
                'name' => 'Sépia',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            349 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Sinople #149414',
                'created_at' => NULL,
                'id' => 350,
                'name' => 'Sinople',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            350 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Smalt #003399',
                'created_at' => NULL,
                'id' => 351,
                'name' => 'Smalt',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            351 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Soufre #ffff6b',
                'created_at' => NULL,
                'id' => 352,
                'name' => 'Soufre',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            352 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Souris #9e9e9e',
                'created_at' => NULL,
                'id' => 353,
                'name' => 'Souris',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            353 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Tabac #9f551e',
                'created_at' => NULL,
                'id' => 354,
                'name' => 'Tabac',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            354 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Taupe #463f32',
                'created_at' => NULL,
                'id' => 355,
                'name' => 'Taupe',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            355 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Terre d\'ombre #926d27',
                'created_at' => NULL,
                'id' => 356,
                'name' => 'Terre d\'ombre',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            356 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Terre de Sienne #8a3324',
                'created_at' => NULL,
                'id' => 357,
                'name' => 'Terre de Sienne',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            357 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Terre de Sienne brûlée #e97451',
                'created_at' => NULL,
                'id' => 358,
                'name' => 'Terre de Sienne brûlée',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            358 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Tomate #de2916',
                'created_at' => NULL,
                'id' => 359,
                'name' => 'Tomate',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            359 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Topaze #faea73',
                'created_at' => NULL,
                'id' => 360,
                'name' => 'Topaze',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            360 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Tourterelle #bbacac',
                'created_at' => NULL,
                'id' => 361,
                'name' => 'Tourterelle',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            361 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Turquoise #25fde9',
                'created_at' => NULL,
                'id' => 362,
                'name' => 'Turquoise',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            362 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vanille #e1ce9a',
                'created_at' => NULL,
                'id' => 363,
                'name' => 'Vanille',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            363 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vermeil #ff0921',
                'created_at' => NULL,
                'id' => 364,
                'name' => 'Vermeil',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            364 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vermillon #db1702',
                'created_at' => NULL,
                'id' => 365,
                'name' => 'Vermillon',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            365 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert #008020',
                'created_at' => NULL,
                'id' => 366,
                'name' => 'Vert',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            366 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert bouteille #096a09',
                'created_at' => NULL,
                'id' => 367,
                'name' => 'Vert bouteille',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            367 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert céladon #83a697',
                'created_at' => NULL,
                'id' => 368,
                'name' => 'Vert céladon',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            368 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert citron #9efd38',
                'created_at' => NULL,
                'id' => 369,
                'name' => 'Vert citron',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            369 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert d\'eau #b0f2b6',
                'created_at' => NULL,
                'id' => 370,
                'name' => 'Vert d\'eau',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            370 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert de chrome #18391e',
                'created_at' => NULL,
                'id' => 371,
                'name' => 'Vert de chrome',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            371 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert de Hooker #1b4f08',
                'created_at' => NULL,
                'id' => 372,
                'name' => 'Vert de Hooker',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            372 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert de vessie #22780f',
                'created_at' => NULL,
                'id' => 373,
                'name' => 'Vert de vessie',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            373 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert épinard #175732',
                'created_at' => NULL,
                'id' => 374,
                'name' => 'Vert épinard',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            374 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert impérial #00561b',
                'created_at' => NULL,
                'id' => 375,
                'name' => 'Vert impérial',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            375 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert lichen #85c17e',
                'created_at' => NULL,
                'id' => 376,
                'name' => 'Vert lichen',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            376 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert perroquet #3af24b',
                'created_at' => NULL,
                'id' => 377,
                'name' => 'Vert perroquet',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            377 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert poireau #4ca66b',
                'created_at' => NULL,
                'id' => 378,
                'name' => 'Vert poireau',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            378 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert pomme #34c924',
                'created_at' => NULL,
                'id' => 379,
                'name' => 'Vert pomme',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            379 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert prairie #57d53b',
                'created_at' => NULL,
                'id' => 380,
                'name' => 'Vert prairie',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            380 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert printemps #00ff7f',
                'created_at' => NULL,
                'id' => 381,
                'name' => 'Vert printemps',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            381 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert sapin #095228',
                'created_at' => NULL,
                'id' => 382,
                'name' => 'Vert sapin',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            382 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert sauge #689d71',
                'created_at' => NULL,
                'id' => 383,
                'name' => 'Vert sauge',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            383 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert tilleul #a5d152',
                'created_at' => NULL,
                'id' => 384,
                'name' => 'Vert tilleul',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            384 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert Véronèse #5a6521',
                'created_at' => NULL,
                'id' => 385,
                'name' => 'Vert Véronèse',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            385 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert-de-gris #95a595',
                'created_at' => NULL,
                'id' => 386,
                'name' => 'Vert-de-gris',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            386 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Vert-jaune #adff2f',
                'created_at' => NULL,
                'id' => 387,
                'name' => 'Vert-jaune',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            387 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Violet #7f00ff',
                'created_at' => NULL,
                'id' => 388,
                'name' => 'Violet',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            388 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Violet d\'évêque #723e64',
                'created_at' => NULL,
                'id' => 389,
                'name' => 'Violet d\'évêque',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            389 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Violine #a10684',
                'created_at' => NULL,
                'id' => 390,
                'name' => 'Violine',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            390 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Viride #40826d',
                'created_at' => NULL,
                'id' => 391,
                'name' => 'Viride',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            391 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Zinzolin #6c0277',
                'created_at' => NULL,
                'id' => 392,
                'name' => 'Zinzolin',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
        ));
        
        
    }
}