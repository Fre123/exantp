<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;
use frontend\models\Persona;



/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $bebidas;
    public $idDepartamento;



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }
    public function attributeLabels()
    {
        return [

            'idDepartamento' => 'Departamento',

        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup($departamento)
    {
        if (!$this->validate()) {
            return null;
        }

        //$id = User::find()->select('max(id)')->scalar();
        /*persona*/
        $persona = new Persona();

        $id = User::find()->max('id');
        $persona->IDPERSONA = ($id+1);
        $persona->IDDEPARTAMENTO = $departamento;

        $persona->save();


        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }
}
