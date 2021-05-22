<?php  
namespace app\models;

use yii\db\ActiveRecord;

/**
 * 
 */
class Supplier extends ActiveRecord
{
	
	public static function tableName()
	{
		# code...
		return 'supplier';
	}

	public function rules()
	{
		# code...
		return [
			[['nama_supplier','notelp','email','alamat'], 'required'],
			[['nama_supplier','notelp','alamat'], 'string'],
			[['email'], 'email']
		];
	}
}

?>