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
                'id' => 1,
                'name' => 'Windsurf / Flotteur / Slalom',
                'comment' => 'Windsurf / Flotteur / Slalom',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Windsurf / Flotteur / Freerace',
                'comment' => 'Windsurf / Flotteur / Freerace',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Windsurf / Flotteur / Freeride',
                'comment' => 'Windsurf / Flotteur / Freeride',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Windsurf / Flotteur / Vague',
                'comment' => 'Windsurf / Flotteur / Vague',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Windsurf / Flotteur / Foil',
                'comment' => 'Windsurf / Flotteur / Foil',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Windsurf / Flotteur / Footstraps',
                'comment' => 'Windsurf / Flotteur / Footstraps',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Windsurf / Voile / Slalom',
                'comment' => 'Windsurf / Voile / Slalom',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Windsurf / Voile / Freerace',
                'comment' => 'Windsurf / Voile / Freerace',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Windsurf / Voile / Freeride',
                'comment' => 'Windsurf / Voile / Freeride',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Windsurf / Voile / Vague',
                'comment' => 'Windsurf / Voile / Vague',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Windsurf / Voile / Foil',
                'comment' => 'Windsurf / Voile / Foil',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Windsurf / Voile / Greement',
                'comment' => 'Windsurf / Voile / Greement',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Windsurf / Voile / Pièces',
                'comment' => 'Windsurf / Voile / Pièces',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Windsurf / Mat / SDM',
                'comment' => 'Windsurf / Mat / SDM',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Windsurf / Mat / RDM',
                'comment' => 'Windsurf / Mat / RDM',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Windsurf / Pied de mat / Plaquette',
                'comment' => 'Windsurf / Pied de mat / Plaquette',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Windsurf / Pied de mat / Rallonge SDM',
                'comment' => 'Windsurf / Pied de mat / Rallonge SDM',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Windsurf / Pied de mat / Rallonge RDM',
                'comment' => 'Windsurf / Pied de mat / Rallonge RDM',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Windsurf / Pied de mat / Pièces détachées',
                'comment' => 'Windsurf / Pied de mat / Pièces détachées',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Windsurf / Aileron / Tuttle',
                'comment' => 'Windsurf / Aileron / Tuttle',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Windsurf / Aileron / Powerbox',
                'comment' => 'Windsurf / Aileron / Powerbox',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Windsurf / Aileron / US',
                'comment' => 'Windsurf / Aileron / US',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Windsurf / Aileron / Slot',
                'comment' => 'Windsurf / Aileron / Slot',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Windsurf / Foil / Complet',
                'comment' => 'Windsurf / Foil / Complet',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Windsurf / Foil / Pièces',
                'comment' => 'Windsurf / Foil / Pièces',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Windsurf / Wishbone / Carbone',
                'comment' => 'Windsurf / Wishbone / Carbone',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Windsurf / Wishbone / Aluminium',
                'comment' => 'Windsurf / Wishbone / Aluminium',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Windsurf / Wishbone / Pièces détachées',
                'comment' => 'Windsurf / Wishbone / Pièces détachées',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Windsurf / One Design',
                'comment' => 'Windsurf / One Design',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Windsurf / Lignes de harnais / Vario',
                'comment' => 'Windsurf / Lignes de harnais / Vario',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Windsurf / Lignes de harnais / Fixe',
                'comment' => 'Windsurf / Lignes de harnais / Fixe',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Kitesurf / Flotteur / Directionnel',
                'comment' => 'Kitesurf / Flotteur / Directionnel',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Kitesurf / Flotteur / Twintip',
                'comment' => 'Kitesurf / Flotteur / Twintip',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Kitesurf / Flotteur / Foil',
                'comment' => 'Kitesurf / Flotteur / Foil',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Kitesurf / Flotteur / Pièces détachées',
                'comment' => 'Kitesurf / Flotteur / Pièces détachées',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Kitesurf / Aile / Complete',
                'comment' => 'Kitesurf / Aile / Complete',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Kitesurf / Aile / Pièces et réparation',
                'comment' => 'Kitesurf / Aile / Pièces et réparation',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Kitesurf / Barre / Complete',
                'comment' => 'Kitesurf / Barre / Complete',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Kitesurf / Barre / Pièces détachées',
                'comment' => 'Kitesurf / Barre / Pièces détachées',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Kitesurf / Foil',
                'comment' => 'Kitesurf / Foil',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Wingfoil / Flotteur',
                'comment' => 'Wingfoil / Flotteur',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Wingfoil / Aile',
                'comment' => 'Wingfoil / Aile',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Wingfoil / Foil',
                'comment' => 'Wingfoil / Foil',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Wingfoil / Foil / Complet',
                'comment' => 'Wingfoil / Foil / Complet',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Wingfoil / Foil / Pièces',
                'comment' => 'Wingfoil / Foil / Pièces',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Wingfoil / Accessoires',
                'comment' => 'Wingfoil / Accessoires',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Sup & Surf / SUP / Rigide',
                'comment' => 'Sup & Surf / SUP / Rigide',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Sup & Surf / SUP / Gonflable',
                'comment' => 'Sup & Surf / SUP / Gonflable',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Sup & Surf / Board Surf',
                'comment' => 'Sup & Surf / Board Surf',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Sup & Surf / Dérive',
                'comment' => 'Sup & Surf / Dérive',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Sup & Surf / Bodyboard',
                'comment' => 'Sup & Surf / Bodyboard',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Sup & Surf / Pads',
                'comment' => 'Sup & Surf / Pads',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Sup & Surf / Pagaie',
                'comment' => 'Sup & Surf / Pagaie',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Sup & Surf / Wax',
                'comment' => 'Sup & Surf / Wax',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Wakeboard / Planche',
                'comment' => 'Wakeboard / Planche',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Wakeboard / Chausse',
                'comment' => 'Wakeboard / Chausse',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Wakeboard / Pack',
                'comment' => 'Wakeboard / Pack',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Wakeboard / Bouée',
                'comment' => 'Wakeboard / Bouée',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Wakeboard / Accessoires',
                'comment' => 'Wakeboard / Accessoires',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Wakeboard / Ski nautique',
                'comment' => 'Wakeboard / Ski nautique',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Wakeboard / Occasion',
                'comment' => 'Wakeboard / Occasion',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Ski alpin / Skis / True Racing',
                'comment' => 'Ski alpin / Skis / True Racing',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Ski alpin / Skis / Piste',
                'comment' => 'Ski alpin / Skis / Piste',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Ski alpin / Skis / All Mountain',
                'comment' => 'Ski alpin / Skis / All Mountain',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Ski alpin / Skis / Freeride',
                'comment' => 'Ski alpin / Skis / Freeride',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Ski alpin / Skis / Randonnée',
                'comment' => 'Ski alpin / Skis / Randonnée',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Ski alpin / Skis / Junior',
                'comment' => 'Ski alpin / Skis / Junior',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Ski alpin / Fixations / Alpine',
                'comment' => 'Ski alpin / Fixations / Alpine',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Ski alpin / Fixations / Randonnée',
                'comment' => 'Ski alpin / Fixations / Randonnée',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Ski alpin / Fixations / Pièces',
                'comment' => 'Ski alpin / Fixations / Pièces',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Ski alpin / Chaussures / True Racing',
                'comment' => 'Ski alpin / Chaussures / True Racing',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Ski alpin / Chaussures / Piste',
                'comment' => 'Ski alpin / Chaussures / Piste',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Ski alpin / Chaussures / Randonnée',
                'comment' => 'Ski alpin / Chaussures / Randonnée',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Ski alpin / Chaussures / Bootfitting',
                'comment' => 'Ski alpin / Chaussures / Bootfitting',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Ski alpin / Entretien / Fart',
                'comment' => 'Ski alpin / Entretien / Fart',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Ski alpin / Entretien / Outillage',
                'comment' => 'Ski alpin / Entretien / Outillage',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Ski alpin / Peaux',
                'comment' => 'Ski alpin / Peaux',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Ski alpin / Batons / Loisir',
                'comment' => 'Ski alpin / Batons / Loisir',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Ski alpin / Batons / True racing',
                'comment' => 'Ski alpin / Batons / True racing',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Snowboard / Plateau / Homme',
                'comment' => 'Snowboard / Plateau / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Snowboard / Plateau / Femme',
                'comment' => 'Snowboard / Plateau / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Snowboard / Fixations / Homme',
                'comment' => 'Snowboard / Fixations / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Snowboard / Fixations / Femme',
                'comment' => 'Snowboard / Fixations / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Snowboard / Pack / Homme',
                'comment' => 'Snowboard / Pack / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Snowboard / Pack / Femme',
                'comment' => 'Snowboard / Pack / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Snowboard / Pack / Enfant',
                'comment' => 'Snowboard / Pack / Enfant',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Snowboard / Boots / Homme',
                'comment' => 'Snowboard / Boots / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Snowboard / Boots / Femme',
                'comment' => 'Snowboard / Boots / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Snowboard / Split et Randonnée',
                'comment' => 'Snowboard / Split et Randonnée',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Snowboard / Pièces détachées',
                'comment' => 'Snowboard / Pièces détachées',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Equipement / Harnais / Ceinture',
                'comment' => 'Equipement / Harnais / Ceinture',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Equipement / Harnais / Culotte',
                'comment' => 'Equipement / Harnais / Culotte',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Equipement / Harnais / Pièces',
                'comment' => 'Equipement / Harnais / Pièces',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Equipement / Leash / Board',
                'comment' => 'Equipement / Leash / Board',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Equipement / Leash / Wing',
                'comment' => 'Equipement / Leash / Wing',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Equipement / Leash / Aile',
                'comment' => 'Equipement / Leash / Aile',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Equipement / Protection / Nautique / Gilets d impact',
                'comment' => 'Equipement / Protection / Nautique / Gilets d impact',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Equipement / Protection / Nautique / Lunettes',
                'comment' => 'Equipement / Protection / Nautique / Lunettes',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Equipement / Protection / Nautique / Crème solaire',
                'comment' => 'Equipement / Protection / Nautique / Crème solaire',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Equipement / Protection / Nautique / Casque',
                'comment' => 'Equipement / Protection / Nautique / Casque',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Equipement / Protection / Nautique / Occasion',
                'comment' => 'Equipement / Protection / Nautique / Occasion',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Equipement / Protection / Hivers / Dorsale',
                'comment' => 'Equipement / Protection / Hivers / Dorsale',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Equipement / Protection / Hivers / Masque',
                'comment' => 'Equipement / Protection / Hivers / Masque',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Equipement / Protection / Hivers / True Racing',
                'comment' => 'Equipement / Protection / Hivers / True Racing',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Equipement / Protection / Hivers / Casque / Loisir',
                'comment' => 'Equipement / Protection / Hivers / Casque / Loisir',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Equipement / Protection / Hivers / Casque / True racing',
                'comment' => 'Equipement / Protection / Hivers / Casque / True racing',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Equipement / Néoprène / Intégrale / Homme',
                'comment' => 'Equipement / Néoprène / Intégrale / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Equipement / Néoprène / Intégrale / Femme',
                'comment' => 'Equipement / Néoprène / Intégrale / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Equipement / Néoprène / Intégrale / Enfant',
                'comment' => 'Equipement / Néoprène / Intégrale / Enfant',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Equipement / Néoprène / Manche courte / Homme',
                'comment' => 'Equipement / Néoprène / Manche courte / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Equipement / Néoprène / Manche courte / Femme',
                'comment' => 'Equipement / Néoprène / Manche courte / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Equipement / Néoprène / Manche courte / Enfant',
                'comment' => 'Equipement / Néoprène / Manche courte / Enfant',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Equipement / Néoprène / Shorty / Homme',
                'comment' => 'Equipement / Néoprène / Shorty / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Equipement / Néoprène / Shorty / Femme',
                'comment' => 'Equipement / Néoprène / Shorty / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Equipement / Néoprène / Shorty / Enfant',
                'comment' => 'Equipement / Néoprène / Shorty / Enfant',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Equipement / Néoprène / Top / Homme',
                'comment' => 'Equipement / Néoprène / Top / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Equipement / Néoprène / Top / Femme',
                'comment' => 'Equipement / Néoprène / Top / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Equipement / Néoprène / Top / Enfant',
                'comment' => 'Equipement / Néoprène / Top / Enfant',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Equipement / Néoprène / Bonnet et gants',
                'comment' => 'Equipement / Néoprène / Bonnet et gants',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Equipement / Néoprène / Chaussons',
                'comment' => 'Equipement / Néoprène / Chaussons',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Equipement / Néoprène / Poncho',
                'comment' => 'Equipement / Néoprène / Poncho',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Equipement / Vêtements',
                'comment' => 'Equipement / Vêtements',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Wear / Mode / Sweat / Homme',
                'comment' => 'Wear / Mode / Sweat / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Wear / Mode / Sweat / Femme',
                'comment' => 'Wear / Mode / Sweat / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Wear / Mode / Sweat / Enfant',
                'comment' => 'Wear / Mode / Sweat / Enfant',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Wear / Mode / Pantalon / Homme',
                'comment' => 'Wear / Mode / Pantalon / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Wear / Mode / Pantalon / Femme',
                'comment' => 'Wear / Mode / Pantalon / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Wear / Mode / Pantalon / Enfant',
                'comment' => 'Wear / Mode / Pantalon / Enfant',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Wear / Mode / Short / Homme',
                'comment' => 'Wear / Mode / Short / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Wear / Mode / Short / Femme',
                'comment' => 'Wear / Mode / Short / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Wear / Mode / Short / Enfant',
                'comment' => 'Wear / Mode / Short / Enfant',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Wear / Mode / T shirt / Homme',
                'comment' => 'Wear / Mode / T shirt / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Wear / Mode / T shirt / Femme',
                'comment' => 'Wear / Mode / T shirt / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Wear / Mode / T shirt / Enfant',
                'comment' => 'Wear / Mode / T shirt / Enfant',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Wear / Mode / Accessoires ',
                'comment' => 'Wear / Mode / Accessoires ',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Wear / Mode / Casquette',
                'comment' => 'Wear / Mode / Casquette',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Wear / Technique / Veste / Homme',
                'comment' => 'Wear / Technique / Veste / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Wear / Technique / Veste / Femme',
                'comment' => 'Wear / Technique / Veste / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Wear / Technique / Veste / Enfant',
                'comment' => 'Wear / Technique / Veste / Enfant',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Wear / Technique / Pantalon / Homme',
                'comment' => 'Wear / Technique / Pantalon / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Wear / Technique / Pantalon / Femme',
                'comment' => 'Wear / Technique / Pantalon / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Wear / Technique / Pantalon / Enfant',
                'comment' => 'Wear / Technique / Pantalon / Enfant',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Wear / Technique / Sous-vetement / Homme',
                'comment' => 'Wear / Technique / Sous-vetement / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Wear / Technique / Sous-vetement / Femme',
                'comment' => 'Wear / Technique / Sous-vetement / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Wear / Technique / Sous-vetement / Enfant',
                'comment' => 'Wear / Technique / Sous-vetement / Enfant',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Wear / Technique / 2e couche / Homme',
                'comment' => 'Wear / Technique / 2e couche / Homme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Wear / Technique / 2e couche / Femme',
                'comment' => 'Wear / Technique / 2e couche / Femme',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Wear / Technique / 2e couche / Enfant',
                'comment' => 'Wear / Technique / 2e couche / Enfant',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Wear / Technique / Chaussettes',
                'comment' => 'Wear / Technique / Chaussettes',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Wear / Technique / Gants / True Racing',
                'comment' => 'Wear / Technique / Gants / True Racing',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Wear / Technique / Gants / Loisir',
                'comment' => 'Wear / Technique / Gants / Loisir',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Wear / Technique / Bonnet',
                'comment' => 'Wear / Technique / Bonnet',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Wear / Racing / Veste',
                'comment' => 'Wear / Racing / Veste',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Wear / Racing / Pantalon et short',
                'comment' => 'Wear / Racing / Pantalon et short',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Wear / Racing / Combinaison',
                'comment' => 'Wear / Racing / Combinaison',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Equipement / Sécurité ski',
                'comment' => 'Equipement / Sécurité ski',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Equipement / Sécurité ski occasion',
                'comment' => 'Equipement / Sécurité ski occasion',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Equipement / Electronique',
                'comment' => 'Equipement / Electronique',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Bagagerie / Housse planche windsurf',
                'comment' => 'Bagagerie / Housse planche windsurf',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Bagagerie / Housse planche windfoil',
                'comment' => 'Bagagerie / Housse planche windfoil',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Bagagerie / Housse planche surf',
                'comment' => 'Bagagerie / Housse planche surf',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Bagagerie / Housse planche Wing',
                'comment' => 'Bagagerie / Housse planche Wing',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Bagagerie / Housse planche kite',
                'comment' => 'Bagagerie / Housse planche kite',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Bagagerie / Housse wake',
                'comment' => 'Bagagerie / Housse wake',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Bagagerie / Housse Ski',
                'comment' => 'Bagagerie / Housse Ski',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Bagagerie / Housse Snow',
                'comment' => 'Bagagerie / Housse Snow',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Bagagerie / Ski Racing',
                'comment' => 'Bagagerie / Ski Racing',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Bagagerie / Pochette Etanche',
                'comment' => 'Bagagerie / Pochette Etanche',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Bagagerie / Sac a dos',
                'comment' => 'Bagagerie / Sac a dos',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Bagagerie / Housse foil',
                'comment' => 'Bagagerie / Housse foil',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Outillage et visserie / Visserie',
                'comment' => 'Outillage et visserie / Visserie',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Outillage et visserie / Inserts',
                'comment' => 'Outillage et visserie / Inserts',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Outillage et visserie / Bout',
                'comment' => 'Outillage et visserie / Bout',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Outillage et visserie / Pompe',
                'comment' => 'Outillage et visserie / Pompe',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Outillage et visserie / Outillage',
                'comment' => 'Outillage et visserie / Outillage',
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Abricot',
                'comment' => 'Abricot #e67e30',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Acajou',
                'comment' => 'Acajou #88421d',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Aigue-marine',
                'comment' => 'Aigue-marine #79f8f8',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Alezan',
                'comment' => 'Alezan #a76726',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Amande',
                'comment' => 'Amande #82c46c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Amarante',
                'comment' => 'Amarante #91283b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Ambre',
                'comment' => 'Ambre #f0c300',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Améthyste',
                'comment' => 'Améthyste #884da7',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Anthracite',
                'comment' => 'Anthracite #303030',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Ardoise',
                'comment' => 'Ardoise #5a5e6b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Aubergine',
                'comment' => 'Aubergine #370028',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Auburn',
                'comment' => 'Auburn #9d3e0c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Aurore',
                'comment' => 'Aurore #ffcb60',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Avocat',
                'comment' => 'Avocat #568203',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Azur',
                'comment' => 'Azur #007fff',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Beige ou Bureau',
                'comment' => 'Beige ou Bureau #c8ad7f',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Beurre',
                'comment' => 'Beurre #f0e36b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Bis',
                'comment' => 'Bis #766f64',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Bisque',
                'comment' => 'Bisque #ffe4c4',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Bistre',
                'comment' => 'Bistre #856d4d',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Bitume',
                'comment' => 'Bitume #4e3d28',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Blanc',
                'comment' => 'Blanc #ffffff',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Blanc cassé',
                'comment' => 'Blanc cassé #fefee2',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Blanc lunaire',
                'comment' => 'Blanc lunaire #f4fefe',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Blé',
                'comment' => 'Blé #e8d630',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Bleu',
                'comment' => 'Bleu #0080ff',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Bleu acier',
                'comment' => 'Bleu acier #3a8eba',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Bleu barbeau',
                'comment' => 'Bleu barbeau #5472ae',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Bleu canard',
                'comment' => 'Bleu canard #048b9a',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Bleu céleste',
                'comment' => 'Bleu céleste #26c4ec',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'Bleu charrette',
                'comment' => 'Bleu charrette #8ea2c6',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Bleu ciel',
                'comment' => 'Bleu ciel #77b5fe',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Bleu de cobalt',
                'comment' => 'Bleu de cobalt #22427c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Bleu de Prusse',
                'comment' => 'Bleu de Prusse #24445c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Bleu électrique',
                'comment' => 'Bleu électrique #2c75ff',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Bleu givré',
                'comment' => 'Bleu givré #80d0d0',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Bleu Klein',
                'comment' => 'Bleu Klein #002fa7',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Bleu Majorelle',
                'comment' => 'Bleu Majorelle #6050dc',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Bleu marine',
                'comment' => 'Bleu marine #03224c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Bleu nuit',
                'comment' => 'Bleu nuit #0f056b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Bleu outremer',
                'comment' => 'Bleu outremer #1b019b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Bleu paon',
                'comment' => 'Bleu paon #067790',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Bleu Persan',
                'comment' => 'Bleu Persan #6600ff',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Bleu pétrole',
                'comment' => 'Bleu pétrole #1d4851',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Bleu roi ou de France',
                'comment' => 'Bleu roi ou de France #318ce7',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Bleu turquin',
                'comment' => 'Bleu turquin #425b8a',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Blond',
                'comment' => 'Blond #e2bc74',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Blond vénitien',
                'comment' => 'Blond vénitien #e7a854',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Bordeaux',
                'comment' => 'Bordeaux #6d071a',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Bouton d\'or',
                'comment' => 'Bouton d\'or #fcdc12',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Brique',
                'comment' => 'Brique #842e1b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Bronze',
                'comment' => 'Bronze #614e1a',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Brou de noix',
                'comment' => 'Brou de noix #3f2204',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Brun',
                'comment' => 'Brun #5b3c11',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Caca d\'oie',
                'comment' => 'Caca d\'oie #cdcd0d',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Cacao',
                'comment' => 'Cacao #614b3a',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Cachou',
                'comment' => 'Cachou #2f1b0c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Cæruleum',
                'comment' => 'Cæruleum #357ab7',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Café',
                'comment' => 'Café #462e01',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Café au lait',
                'comment' => 'Café au lait #785e2f',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Cannelle',
                'comment' => 'Cannelle #7e5835',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Capucine',
                'comment' => 'Capucine #ff5e4d',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Caramel',
                'comment' => 'Caramel #7e3300',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Carmin',
                'comment' => 'Carmin #960018',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Carmin d\'alizarine',
                'comment' => 'Carmin d\'alizarine #b31f2f',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Carotte',
                'comment' => 'Carotte #f4661b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Chamois',
                'comment' => 'Chamois #d0c07a',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Chartreuse',
                'comment' => 'Chartreuse #7fff00',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'Châtain',
                'comment' => 'Châtain #8b6c42',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Chaudron',
                'comment' => 'Chaudron #85530f',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Chocolat',
                'comment' => 'Chocolat #5a3a22',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Citrouille',
                'comment' => 'Citrouille #df6d14',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Coquelicot',
                'comment' => 'Coquelicot #c60800',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Coquille d\'œuf',
                'comment' => 'Coquille d\'œuf #fde9e0',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'Corail',
                'comment' => 'Corail #e73e01',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Cramoisi',
                'comment' => 'Cramoisi #dc143c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Crème',
                'comment' => 'Crème #fdf1b8',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'Cuisse de nymphe',
                'comment' => 'Cuisse de nymphe #fee7f0',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'Cuivre',
                'comment' => 'Cuivre #b36700',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'Cyan',
                'comment' => 'Cyan #2bfafa',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'Écarlate',
                'comment' => 'Écarlate #ed0000',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'Écru',
                'comment' => 'Écru #fefee0',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'Émeraude',
                'comment' => 'Émeraude #01d758',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Flave',
                'comment' => 'Flave #e6e697',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'Fraise',
                'comment' => 'Fraise #bf3030',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'Fraise écrasée',
                'comment' => 'Fraise écrasée #a42424',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'Framboise',
                'comment' => 'Framboise #c72c48',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'Fuchsia',
                'comment' => 'Fuchsia #fd3f92',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'Fumée',
                'comment' => 'Fumée #bbd2e1',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'Garance',
                'comment' => 'Garance #ee1010',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'Glauque',
                'comment' => 'Glauque #649b88',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'Glycine',
                'comment' => 'Glycine #c9a0dc',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'Grège',
                'comment' => 'Grège #bbae98',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'Grenadine',
                'comment' => 'Grenadine #e9383f',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'Grenat',
                'comment' => 'Grenat #6e0b14',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'Gris',
                'comment' => 'Gris #606060',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'Gris acier',
                'comment' => 'Gris acier #afafaf',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'Gris de Payne',
                'comment' => 'Gris de Payne #677179',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'Gris fer',
                'comment' => 'Gris fer #7f7f7f',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'Gris perle',
                'comment' => 'Gris perle #cecece',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'Groseille',
                'comment' => 'Groseille #cf0a1d',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'Guède',
                'comment' => 'Guède #56739a',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'Gueules',
                'comment' => 'Gueules #e21313',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'Héliotrope',
                'comment' => 'Héliotrope #df73ff',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'Incarnat',
                'comment' => 'Incarnat #ff6f7d',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'Indigo',
                'comment' => 'Indigo #2e006c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'Ivoire',
                'comment' => 'Ivoire #ffffd4',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'Jaune',
                'comment' => 'Jaune #ffff00',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'Jaune canari',
                'comment' => 'Jaune canari #e7f00d',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'Jaune citron',
                'comment' => 'Jaune citron #f7ff3c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'Jaune d\'or',
                'comment' => 'Jaune d\'or #efd807',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'Jaune de cobalt',
                'comment' => 'Jaune de cobalt #fdee00',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'Jaune de Mars',
                'comment' => 'Jaune de Mars #eed153',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'Jaune de Naples',
                'comment' => 'Jaune de Naples #fff0bc',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'Jaune impérial',
                'comment' => 'Jaune impérial #ffe436',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'Jaune mimosa',
                'comment' => 'Jaune mimosa #fef86c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'Kaki',
                'comment' => 'Kaki #94812b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'Lapis-lazuli',
                'comment' => 'Lapis-lazuli #26619c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'Lavallière',
                'comment' => 'Lavallière #8f5922',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'Lavande',
                'comment' => 'Lavande #9683ec',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'Lie de vin',
                'comment' => 'Lie de vin #ac1e44',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'Lilas',
                'comment' => 'Lilas #b666d2',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'Lin',
                'comment' => 'Lin #faf0e6',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'Magenta',
                'comment' => 'Magenta #db0073',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'Maïs',
                'comment' => 'Maïs #ffde75',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'Malachite',
                'comment' => 'Malachite #1fa055',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'Mandarine',
                'comment' => 'Mandarine #fea347',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'Marron',
                'comment' => 'Marron #582900',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'Mastic',
                'comment' => 'Mastic #b3b191',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'Mauve',
                'comment' => 'Mauve #d473d4',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'Menthe',
                'comment' => 'Menthe #16b84e',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'Moutarde',
                'comment' => 'Moutarde #c7cf00',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'Nacarat',
                'comment' => 'Nacarat #fc5d5d',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'Nankin',
                'comment' => 'Nankin #f7e269',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'Noir',
                'comment' => 'Noir #000000',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'Noir d\'aniline',
                'comment' => 'Noir d\'aniline #120d16',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'Noir de carbone',
                'comment' => 'Noir de carbone #130e0a',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'Noisette',
                'comment' => 'Noisette #955628',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'Ocre',
                'comment' => 'Ocre #dfaf2c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'Ocre rouge',
                'comment' => 'Ocre rouge #dd985c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'Olive',
                'comment' => 'Olive #708d23',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'Or',
                'comment' => 'Or #ffd700',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'Orange',
                'comment' => 'Orange #ff7f00',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'Orange brûlé',
                'comment' => 'Orange brûlé #cc5500',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'Orchidée',
                'comment' => 'Orchidée #da70d6',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'Orpiment',
                'comment' => 'Orpiment #fcd21c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'Parme',
                'comment' => 'Parme #cfa0e9',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'Pelure d\'oignon',
                'comment' => 'Pelure d\'oignon #d58490',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'Pervenche',
                'comment' => 'Pervenche #ccccff',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'Pistache',
                'comment' => 'Pistache #bef574',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'Poil de chameau',
                'comment' => 'Poil de chameau #b67823',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'Pourpre',
                'comment' => 'Pourpre #9e0e40',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'Prune',
                'comment' => 'Prune #811453',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'Puce',
                'comment' => 'Puce #4e1609',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'Rose',
                'comment' => 'Rose #fd6c9e',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'Rose Mountbatten',
                'comment' => 'Rose Mountbatten #997a8d',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'Rouge',
                'comment' => 'Rouge #f00020',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'Rouge anglais',
                'comment' => 'Rouge anglais #f7230c',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'Rouge cardinal',
                'comment' => 'Rouge cardinal #b82010',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'Rouge cerise',
                'comment' => 'Rouge cerise #bb0b0b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'Rouge d\'Andrinople',
                'comment' => 'Rouge d\'Andrinople #a91101',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'Rouge de Falun',
                'comment' => 'Rouge de Falun #801818',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'Rouge feu',
                'comment' => 'Rouge feu #fe1b00',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'Rouge sang',
                'comment' => 'Rouge sang #850606',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'Rouge tomette',
                'comment' => 'Rouge tomette #ae4a34',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'Rouille',
                'comment' => 'Rouille #985717',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'Roux',
                'comment' => 'Roux #ad4f09',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'Rubis',
                'comment' => 'Rubis #e0115f',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'Sable',
                'comment' => 'Sable #e0cda9',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'Sang de bœuf',
                'comment' => 'Sang de bœuf #730800',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'Saphir',
                'comment' => 'Saphir #0131b4',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'Sarcelle',
                'comment' => 'Sarcelle #008e8e',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'Saumon',
                'comment' => 'Saumon #f88e55',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'Sépia',
                'comment' => 'Sépia #ae8964',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'Sinople',
                'comment' => 'Sinople #149414',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'Smalt',
                'comment' => 'Smalt #003399',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'Soufre',
                'comment' => 'Soufre #ffff6b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'Souris',
                'comment' => 'Souris #9e9e9e',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'Tabac',
                'comment' => 'Tabac #9f551e',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'Taupe',
                'comment' => 'Taupe #463f32',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'Terre d\'ombre',
                'comment' => 'Terre d\'ombre #926d27',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'Terre de Sienne',
                'comment' => 'Terre de Sienne #8a3324',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'Terre de Sienne brûlée',
                'comment' => 'Terre de Sienne brûlée #e97451',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'Tomate',
                'comment' => 'Tomate #de2916',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'Topaze',
                'comment' => 'Topaze #faea73',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'Tourterelle',
                'comment' => 'Tourterelle #bbacac',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'Turquoise',
                'comment' => 'Turquoise #25fde9',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'Vanille',
                'comment' => 'Vanille #e1ce9a',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'Vermeil',
                'comment' => 'Vermeil #ff0921',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'Vermillon',
                'comment' => 'Vermillon #db1702',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'Vert',
                'comment' => 'Vert #008020',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'Vert bouteille',
                'comment' => 'Vert bouteille #096a09',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'Vert céladon',
                'comment' => 'Vert céladon #83a697',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'Vert citron',
                'comment' => 'Vert citron #9efd38',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'Vert d\'eau',
                'comment' => 'Vert d\'eau #b0f2b6',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'Vert de chrome',
                'comment' => 'Vert de chrome #18391e',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'Vert de Hooker',
                'comment' => 'Vert de Hooker #1b4f08',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'Vert de vessie',
                'comment' => 'Vert de vessie #22780f',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'Vert épinard',
                'comment' => 'Vert épinard #175732',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'Vert impérial',
                'comment' => 'Vert impérial #00561b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'Vert lichen',
                'comment' => 'Vert lichen #85c17e',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'Vert perroquet',
                'comment' => 'Vert perroquet #3af24b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'Vert poireau',
                'comment' => 'Vert poireau #4ca66b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'Vert pomme',
                'comment' => 'Vert pomme #34c924',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'Vert prairie',
                'comment' => 'Vert prairie #57d53b',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'Vert printemps',
                'comment' => 'Vert printemps #00ff7f',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'Vert sapin',
                'comment' => 'Vert sapin #095228',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'Vert sauge',
                'comment' => 'Vert sauge #689d71',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'Vert tilleul',
                'comment' => 'Vert tilleul #a5d152',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'Vert Véronèse',
                'comment' => 'Vert Véronèse #5a6521',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'Vert-de-gris',
                'comment' => 'Vert-de-gris #95a595',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'Vert-jaune',
                'comment' => 'Vert-jaune #adff2f',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'Violet',
                'comment' => 'Violet #7f00ff',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'Violet d\'évêque',
                'comment' => 'Violet d\'évêque #723e64',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'Violine',
                'comment' => 'Violine #a10684',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'Viride',
                'comment' => 'Viride #40826d',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'Zinzolin',
                'comment' => 'Zinzolin #6c0277',
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}