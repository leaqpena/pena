<?

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Models
{

	use HasFactory;

	protected $fillable =[
		'role_name',
		'url',
	];

	public function getNameAttribute(); string
	{
		return $this->role_name;
	}
}