<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('manufacturer_model');
    }

    public function login()
    {
        try {
           
            $post = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);

            if(!isset($post['email']) or !isset($post['password']))
            {
                throw new \LogicException('no email or password entered.');
                return;
            }

            if($post['email'] === '' or $post['password'] === '')
            {
                throw new \LogicException('email or password is empty.');
                return;
            }

            $email = $post['email'];
            $password = $post['password'];
            $manufacturer = $this->manufacturer_model->getWhere(['email'=>$email])->row();
            
            if(is_null($manufacturer))
            {
                throw new \LogicException('user not found.');
                return;
            }
            
            // $encryptPassword = $this->encryption->encrypt('');
            $decryptPassword = $this->encryption->decrypt($manufacturer->password);

            if($password !== $decryptPassword)
            {
                throw new \LogicException('wrong password.');
                return;
            }

            $this->session->set_userdata([
                'manufacturerId' => $manufacturer->id,
            ]);

            return $this->handling('success.', 200, [
                'status' => 200,
                'message' => 'login successful.'
            ]);

        } catch (\LogicException $e) {

            return $this->handling($e->getMessage(), 403);

        } catch (\Throwable $e) {

            return $this->handling($e->getMessage(), 500);
        }
    }

    public function logout()
    {
        try {
            
            $this->session->sess_destroy();

            return $this->handling('success.', 200, [
                'status' => 200,
                'message' => 'successful logout.'
            ]);

        } catch (\LogicException $e) {

            return $this->handling($e->getMessage(), 403);

        } catch (\Throwable $e) {

            return $this->handling($e->getMessage(), 500);
        }
    }
}
