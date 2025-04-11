use Illuminate\Support\Facades\Hash;
use App\Models\User;

public function run()
{
User::create([
'username' => 'admin1',
'password' => Hash::make('halouniverse1!'),
'role' => 'admin',
]);
}