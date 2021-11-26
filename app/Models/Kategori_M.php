<?php 

namespace AppModels;
use CodeIgniter\Model;

class Kategori_M extends Model
{

    protected $table = 'tblkategori';
    
    protected $allowedFields = 'kategori', 'keterangan';

    protected $primarykey = 'idkategori';
    
    protected $validationRules = [
        'kaegori'  => 'alpha_numeric_space|min_lenght[3]|is_unique[tbkategori.kategori'
    ];
    


}
protected $validationMessages =[
    'kategori'     => [
            'alpha_numeric_space' => 'TIDAK BOELH MENGGUNAKAN SIMBOL',
            'min_lenght' =>'Minimal 3 huruf',
            'is_unique' => 'ada data yang sama'
    ];
 ];
?>