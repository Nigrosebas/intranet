<?php 
use Illuminate\Auth\UserInterface;
class Usuario extends Eloquent implements UserInterface{ //Todos los modelos deben extender la clase Eloquent
    protected $table = 'usuarios';
    protected $fillable = array('nombre', 'apellido','correo','password');
    public $timestamps = false;

    public function getAuthIdentifier()
    {
    	return $this -> getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	//$this->remember_token;
	}

	public function getRememberTokenName()
	{
	return 'remember_token';
	}
} 
?>