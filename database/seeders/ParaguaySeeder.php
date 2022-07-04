<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Paraguay;
use Illuminate\Support\Facades\Hash;

class ParaguaySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $paraguay[0] = 'Paraguay';
        $paraguay[16] = "Alto Paraguay";
        $paraguay[10] = "Alto Paraná";
        $paraguay[13] = "Amambay";
        $paraguay[17] = "Boquerón";
        $paraguay[5] = "Caaguazú";
        $paraguay[6] = "Caazapá";
        $paraguay[14] = "Canindeyú";
        $paraguay[11] = "Central";
        $paraguay[1] = "Concepción";
        $paraguay[3] = "Cordillera";
        $paraguay[4] = "Guairá";
        $paraguay[7] = "Itapúa";
        $paraguay[8] = "Misiones";
        $paraguay[12] = "Ñeembucú";
        $paraguay[9] = "Paraguarí";
        $paraguay[15] = "Presidente Hayes";
        $paraguay[2] = "San Pedro";
        $paraguay[18] = "Bahía Negra";
        $paraguay[19] = "Capitán Carmelo Peralta";
        $paraguay[21] = "Fuerte Olimpo";
        $paraguay[20] = "Puerto Casado";
        $paraguay[22] = "Ciudad del Este";
        $paraguay[23] = "Doctor Juan León Mallorquín";
        $paraguay[24] = "Doctor Raúl Peña";
        $paraguay[25] = "Domingo Martínez de Irala";
        $paraguay[26] = "Hernandarias";
        $paraguay[27] = "Iruña";
        $paraguay[28] = "Itakyry";
        $paraguay[29] = "Juan Emilio O'Leary";
        $paraguay[30] = "Los Cedrales";
        $paraguay[31] = "Mbaracayú";
        $paraguay[32] = "Minga Guazú";
        $paraguay[33] = "Minga Porá";
        $paraguay[34] = "Naranjal";
        $paraguay[35] = "Ñacunday";
        $paraguay[36] = "Presidente Franco";
        $paraguay[37] = "San Alberto";
        $paraguay[38] = "San Cristóbal";
        $paraguay[39] = "Santa Fe del Paraná";
        $paraguay[40] = "Santa Rita";
        $paraguay[41] = "Santa Rosa del Monday";
        $paraguay[42] = "Tavapy";
        $paraguay[43] = "Yguazú";
        $paraguay[44] = "Bella Vista";
        $paraguay[45] = "Capitán Bado";
        $paraguay[48] = "Karapaí";
        $paraguay[46] = "Pedro Juan Caballero";
        $paraguay[47] = "Zanja Pytá";
        $paraguay[49] = "Filadelfia";
        $paraguay[50] = "Loma Plata";
        $paraguay[51] = "Mariscal Estigarribia";
        $paraguay[52] = "Caaguazú";
        $paraguay[53] = "Carayaó";
        $paraguay[54] = "Coronel Oviedo";
        $paraguay[55] = "Doctor Cecilio Báez";
        $paraguay[56] = "Doctor J. Eulogio Estigarribia";
        $paraguay[57] = "Doctor Juan Manuel Frutos";
        $paraguay[58] = "José Domingo Ocampos";
        $paraguay[59] = "La Pastora";
        $paraguay[60] = "Mcal. Francisco S. López";
        $paraguay[61] = "Nueva Londres";
        $paraguay[62] = "Nueva Toledo";
        $paraguay[65] = "R. I. Tres Corrales";
        $paraguay[63] = "Raúl Arsenio Oviedo";
        $paraguay[64] = "Repatriación";
        $paraguay[66] = "San Joaquín";
        $paraguay[67] = "San José de los Arroyos";
        $paraguay[68] = "Santa Rosa del Mbutuy";
        $paraguay[69] = "Simón Bolívar";
        $paraguay[70] = "Tembiaporá";
        $paraguay[71] = "Tres de Febrero";
        $paraguay[72] = "Vaquería";
        $paraguay[73] = "Yhú";
        $paraguay[74] = "3 de Mayo";
        $paraguay[75] = "Abaí";
        $paraguay[76] = "Buena Vista";
        $paraguay[77] = "Caazapá";
        $paraguay[78] = "Doctor Moisés S. Bertoni";
        $paraguay[79] = "Fulgencio Yegros";
        $paraguay[80] = "General Higinio Morínigo";
        $paraguay[81] = "Maciel";
        $paraguay[82] = "San Juan Nepomuceno";
        $paraguay[83] = "Tavaí";
        $paraguay[84] = "Yuty";
        $paraguay[85] = "Corpus Christi";
        $paraguay[86] = "Curuguaty";
        $paraguay[87] = "Gral. Francisco Caballero Álvarez";
        $paraguay[88] = "Itanará";
        $paraguay[89] = "Katueté";
        $paraguay[90] = "La Paloma";
        $paraguay[91] = "Nueva Esperanza";
        $paraguay[92] = "Salto del Guairá";
        $paraguay[93] = "Villa Ygatimí";
        $paraguay[94] = "Yasy Cañy";
        $paraguay[97] = "Yby Pytá";
        $paraguay[95] = "Ybyrarovaná";
        $paraguay[96] = "Ypejhú";
        $paraguay[98] = "Areguá";
        $paraguay[99] = "Asunción";
        $paraguay[100] = "Capiatá";
        $paraguay[101] = "Fernando de la Mora";
        $paraguay[102] = "Guarambaré";
        $paraguay[103] = "Itá";
        $paraguay[104] = "Itauguá";
        $paraguay[105] = "Julián Augusto Saldívar";
        $paraguay[106] = "Lambaré";
        $paraguay[107] = "Limpio";
        $paraguay[108] = "Luque";
        $paraguay[109] = "Mariano Roque Alonso";
        $paraguay[111] = "Nueva Italia";
        $paraguay[110] = "Ñemby";
        $paraguay[112] = "San Antonio";
        $paraguay[113] = "San Lorenzo";
        $paraguay[114] = "Villa Elisa";
        $paraguay[115] = "Villeta";
        $paraguay[116] = "Ypacaraí";
        $paraguay[117] = "Ypané";
        $paraguay[118] = "Azotey";
        $paraguay[119] = "Belén";
        $paraguay[120] = "Concepción";
        $paraguay[121] = "Horqueta";
        $paraguay[122] = "Loreto";
        $paraguay[128] = "Paso Barreto";
        $paraguay[127] = "San Alfredo";
        $paraguay[123] = "San Carlos del Apa";
        $paraguay[124] = "San Lázaro";
        $paraguay[126] = "Sargento José Félix López";
        $paraguay[125] = "Yby Yaú";
        $paraguay[129] = "Altos";
        $paraguay[130] = "Arroyos y Esteros";
        $paraguay[131] = "Atyrá";
        $paraguay[132] = "Caacupé";
        $paraguay[133] = "Caraguatay";
        $paraguay[134] = "Emboscada";
        $paraguay[135] = "Eusebio Ayala";
        $paraguay[136] = "Isla Pucú";
        $paraguay[137] = "Itacurubí de la Cordillera";
        $paraguay[138] = "Juan de Mena";
        $paraguay[139] = "Loma Grande";
        $paraguay[140] = "Mbocayaty del Yhaguy";
        $paraguay[141] = "Nueva Colombia";
        $paraguay[142] = "Piribebuy";
        $paraguay[143] = "Primero de Marzo";
        $paraguay[144] = "San Bernardino";
        $paraguay[145] = "San José Obrero";
        $paraguay[146] = "Santa Elena";
        $paraguay[147] = "Tobatí";
        $paraguay[148] = "Valenzuela";
        $paraguay[149] = "Borja";
        $paraguay[150] = "Colonia Independencia";
        $paraguay[151] = "Coronel Martínez";
        $paraguay[152] = "Dr. Bottrell";
        $paraguay[153] = "Fassardi";
        $paraguay[154] = "Félix Pérez Cardozo";
        $paraguay[155] = "Garay";
        $paraguay[156] = "Itapé";
        $paraguay[157] = "Iturbe";
        $paraguay[158] = "Mbocayaty";
        $paraguay[159] = "Natalicio Talavera";
        $paraguay[160] = "Ñumí";
        $paraguay[161] = "Paso Yobái";
        $paraguay[162] = "San Salvador";
        $paraguay[163] = "Tebicuary";
        $paraguay[164] = "Troche";
        $paraguay[165] = "Villarrica";
        $paraguay[166] = "Yataity";
        $paraguay[167] = "Alto Verá";
        $paraguay[168] = "Bella Vista";
        $paraguay[169] = "Cambyretá";
        $paraguay[170] = "Capitán Meza";
        $paraguay[171] = "Capitán Miranda";
        $paraguay[172] = "Carlos Antonio López";
        $paraguay[173] = "Carmen del Paraná";
        $paraguay[174] = "Coronel Bogado";
        $paraguay[175] = "Edelira";
        $paraguay[176] = "Encarnación";
        $paraguay[177] = "Fram";
        $paraguay[178] = "General Artigas";
        $paraguay[179] = "General Delgado";
        $paraguay[180] = "Hohenau";
        $paraguay[181] = "Itapúa Poty";
        $paraguay[182] = "Jesús";
        $paraguay[184] = "José Leandro Oviedo";
        $paraguay[183] = "La Paz";
        $paraguay[185] = "Mayor Otaño";
        $paraguay[186] = "Natalio";
        $paraguay[187] = "Nueva Alborada";
        $paraguay[188] = "Obligado";
        $paraguay[189] = "Pirapó";
        $paraguay[190] = "San Cosme y Damián";
        $paraguay[191] = "San Juan del Paraná";
        $paraguay[192] = "San Pedro del Paraná";
        $paraguay[193] = "San Rafael del Paraná";
        $paraguay[194] = "Tomás Romero Pereira";
        $paraguay[195] = "Trinidad";
        $paraguay[196] = "Yatytay";
        $paraguay[197] = "Ayolas";
        $paraguay[198] = "San Ignacio";
        $paraguay[199] = "San Juan Bautista.";
        $paraguay[200] = "San Miguel";
        $paraguay[201] = "San Patricio";
        $paraguay[202] = "Santa María";
        $paraguay[203] = "Santa Rosa";
        $paraguay[204] = "Santiago";
        $paraguay[205] = "Villa Florida";
        $paraguay[206] = "Yabebyry";
        $paraguay[207] = "Alberdi";
        $paraguay[208] = "Cerrito";
        $paraguay[209] = "Desmochados";
        $paraguay[210] = "General José Eduvigis Díaz";
        $paraguay[211] = "Guazú Cuá";
        $paraguay[212] = "Humaitá";
        $paraguay[213] = "Isla Umbú";
        $paraguay[214] = "Laureles";
        $paraguay[215] = "Mayor José J. Martínez";
        $paraguay[216] = "Paso de Patria";
        $paraguay[217] = "Pilar";
        $paraguay[218] = "San Juan Bautista del Ñeembucú";
        $paraguay[219] = "Tacuaras";
        $paraguay[220] = "Villa Franca";
        $paraguay[222] = "Villa Oliva";
        $paraguay[221] = "Villalbín";
        $paraguay[223] = "Acahay";
        $paraguay[224] = "Caapucú";
        $paraguay[225] = "Carapeguá";
        $paraguay[226] = "Escobar";
        $paraguay[227] = "Gral. Bernardino Caballero";
        $paraguay[228] = "La Colmena";
        $paraguay[229] = "Mbuyapey";
        $paraguay[230] = "Paraguarí";
        $paraguay[231] = "Pirayú";
        $paraguay[232] = "Quiindy";
        $paraguay[233] = "Quyquyhó";
        $paraguay[234] = "San Roque González de Santa Cruz";
        $paraguay[235] = "Sapucai";
        $paraguay[236] = "Tebicuary-mí";
        $paraguay[237] = "Yaguarón";
        $paraguay[238] = "Ybycuí";
        $paraguay[239] = "Ybytymí";
        $paraguay[240] = "Benjamín Aceval";
        $paraguay[241] = "Dr. José Falcón";
        $paraguay[242] = "General José María Bruguez";
        $paraguay[243] = "Nanawa";
        $paraguay[244] = "Puerto Pinasco";
        $paraguay[246] = "Tte. Esteban Martínez";
        $paraguay[245] = "Tte. Irala Fernández";
        $paraguay[247] = "Villa Hayes";
        $paraguay[248] = "Antequera";
        $paraguay[249] = "Capiibary";
        $paraguay[250] = "Choré";
        $paraguay[251] = "General Elizardo Aquino";
        $paraguay[252] = "General Isidoro Resquín";
        $paraguay[253] = "Guayaibí";
        $paraguay[254] = "Itacurubí del Rosario";
        $paraguay[255] = "Liberación";
        $paraguay[256] = "Lima";
        $paraguay[257] = "Nueva Germania";
        $paraguay[258] = "San Estanislao";
        $paraguay[259] = "San Pablo";
        $paraguay[260] = "San Pedro";
        $paraguay[261] = "Santa Rosa del Aguaray";
        $paraguay[262] = "Tacuatí";
        $paraguay[263] = "Unión";
        $paraguay[264] = "Veinticinco de Diciembre";
        $paraguay[265] = "Villa del Rosario";
        $paraguay[266] = "Yataity del Norte";
        $paraguay[267] = "Yrybucuá";
        foreach ($paraguay as $key => $value) {
            $departamento_id = 0;
            if (in_array($key, [16, 10, 13, 17, 5, 6, 14, 11, 1, 3, 4, 7, 8, 12, 9, 15, 2])) {
                $departamento_id = 0;
            }

            if (in_array($key, [18, 19, 21, 20])) {
                $departamento_id = 16;
            }

            if (in_array($key, [22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43])) {
                $departamento_id = 10;
            }

            if (in_array($key, [44, 45, 48, 46, 47])) {
                $departamento_id = 13;
            }

            if (in_array($key, [49, 50, 51])) {
                $departamento_id = 17;
            }

            if (in_array($key, [52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 65, 63, 64, 66, 67, 68, 69, 70, 71, 72, 73])) {
                $departamento_id = 5;
            }

            if (in_array($key, [74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84])) {
                $departamento_id = 6;
            }

            if (in_array($key, [85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 97, 95, 96])) {
                $departamento_id = 14;
            }

            if (in_array($key, [98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 111, 110, 112, 113, 114, 115, 116, 117])) {
                $departamento_id = 11;
            }

            if (in_array($key, [118, 119, 120, 121, 122, 128, 127, 123, 124, 126, 125])) {
                $departamento_id = 1;
            }

            if (in_array($key, [129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148])) {
                $departamento_id = 3;
            }

            if (in_array($key, [149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166])) {
                $departamento_id = 4;
            }

            if (in_array($key, [167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 184, 183, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196])) {
                $departamento_id = 7;
            }

            if (in_array($key, [197, 198, 199, 200, 201, 202, 203, 204, 205, 206])) {
                $departamento_id = 8;
            }

            if (in_array($key, [207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 222, 221])) {
                $departamento_id = 12;
            }

            if (in_array($key, [223, 224, 225, 226, 227, 228, 229, 230, 231, 232, 233, 234, 235, 236, 237, 238, 239])) {
                $departamento_id = 9;
            }

            if (in_array($key, [240, 241, 242, 243, 244, 246, 245, 247])) {
                $departamento_id = 15;
            }

            if (in_array($key, [248, 249, 250, 251, 252, 253, 254, 255, 256, 257, 258, 259, 260, 261, 262, 263, 264, 265, 266, 267])) {
                $departamento_id = 2;
            }

            Paraguay::create([
                'id' => $key,
                'nombre' => $value,
                'departamento_id' => $departamento_id,
              ]);
        }
    }
}
