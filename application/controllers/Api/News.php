<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class News extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
    }

    public function show($manufacturerId)
    {
        try {
            
            $news = $this->news_model->getWhere(['manufacturer_id' => $manufacturerId])->result();

            return $this->handling('success.', 200, [
                'status' => 200,
                'message' => 'search success.',
                'result' => $news
            ]);

        } catch (\LogicException $e) {

            return $this->handling($e->getMessage(), 403);

        } catch (\Throwable $e) {

            return $this->handling($e->getMessage(), 500);
        }
    }

    public function add()
    {
        try {
            
            $post = json_decode($this->input->raw_input_stream, true);
          
            if(!isset($post['manufacturer_id']) or !isset($post['title']) or !isset($post['content']))
            {
                throw new \LogicException('no manufacturer id or title or content entered.');
                return;
            }

            if($post['manufacturer_id'] === '' || $post['title'] === '' || $post['content'] === '')
            {
                throw new \LogicException('not manufacturer id or title or content is empty.');
                return;
            }

            $manufacturerId = $post['manufacturer_id'];
            $title = $post['title'];
            $content = $post['content'];
            $headerImage = $post['header_image'];
          
            $this->news_model->add([
                'manufacturer_id' => $manufacturerId,
                'title' => $title,
                'content' => $content,
                'header_image' => $headerImage
            ]);

            return $this->handling('success.', 200, [
                'status' => 200,
                'message' => 'add success.'
            ]);

        } catch (\LogicException $e) {

            return $this->handling($e->getMessage(), 403);

        } catch (\Throwable $e) {

            return $this->handling($e->getMessage(), 500);
        }
    }

    public function update($id, $manufacturerId)
    {
        try {
            
            $post = json_decode($this->input->raw_input_stream, true);

            if(!isset($post['title']) or !isset($post['content']))
            {
                throw new \LogicException('no title or content entered.');
                return;
            }

            if($post['title'] === '' || $post['content'] === '')
            {
                throw new \LogicException('not title or content is empty.');
                return;
            }

            $title = $post['title'];
            $content = $post['content'];
            $headerImage = $post['header_image'];
          
            $this->news_model->update($id, $manufacturerId, [
                'title' => $title,
                'content' => $content,
                'header_image' => $headerImage,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            return $this->handling('success.', 200, [
                'status' => 200,
                'message' => 'update success.'
            ]);

        } catch (\LogicException $e) {

            return $this->handling($e->getMessage(), 403);

        } catch (\Throwable $e) {

            return $this->handling($e->getMessage(), 500);
        }
    }

    public function delete($id, $manufacturerId)
    {
        try {

            $this->news_model->delete($id, $manufacturerId);
           
            return $this->handling('success.', 200, [
                'status' => 200,
                'message' => 'delete success.'
            ]);

        } catch (\LogicException $e) {

            return $this->handling($e->getMessage(), 403);

        } catch (\Throwable $e) {

            return $this->handling($e->getMessage(), 500);
        }
    }
}
