<?php

namespace App\Exports;
use App\Jodi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class JodiExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return['id','customerId','category_name','akata01' ,'akata02' ,'akata03' ,'akata04' ,'akata05' ,'akata06' ,'akata07' ,'akata08' ,'akata09' ,'akata10' ,'akata11' ,'akata12' ,'akata13' ,'akata14' ,'akata15' ,'akata16' ,'akata17' ,'akata18' ,'akata19' ,'akata20' ,'akata21' ,
    'akata22' ,'akata23' ,'akata24' ,'akata25' ,'akata26' ,'akata27' ,'akata28' ,'akata29' ,'akata30' ,'akata31' ,'akata32' ,'akata33' ,'akata34' ,'akata35' ,'akata36' ,'akata37' ,'akata38' ,'akata39' ,'akata40' ,'akata41' ,
    'akata42' ,'akata43' ,'akata44' ,'akata45' ,'akata46' ,'akata47' ,'akata48' ,'akata49' ,'akata50' ,'akata51' ,'akata52' ,'akata53' ,'akata54' ,'akata55' ,'akata56' ,'akata57' ,'akata58' ,'akata59' ,'akata60' ,'akata61' ,
    'akata62' ,'akata63' ,'akata64' ,'akata65' ,'akata66' ,'akata67' ,'akata68' ,'akata69' ,'akata70' ,'akata71' ,'akata72' ,'akata73' ,'akata74' ,'akata75' ,'akata76' ,'akata77' ,'akata78' ,'akata79' ,'akata80' ,'akata81' ,
    'akata82' ,'akata83' ,'akata84' ,'akata85' ,'akata86' ,'akata87' ,'akata88' ,'akata89' ,'akata90' ,'akata91' ,'akata92' ,'akata93' ,'akata94' ,'akata95' ,'akata96' ,'akata97' ,'akata98' ,'akata99' ,'akata100', 'created_date'
        ];
    } 
   
    public function collection()
    {
        return Jodi::all();
    }
}
