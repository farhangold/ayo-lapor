<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Berita_test extends TestCase
{

    public function setUp(): void
    {
        $this->resetInstance();
        $this->CI->load->model('BeritaModel');
        $this->obj = $this->CI->BeritaModel;
    }

    public function testAddSuccessCase()
	{
        $data = [
            'title' => "TEST",
            'description' => "TEST DESCRIPTION",
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => "TEST"
        ];
        $result = $this->obj->insert($data);
        $this->assertTrue($result);
	}
    public function testAddFailedCase()
	{
        $data = [
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => "TEST"
        ];
        $result = $this->obj->insert($data);
        $this->assertFalse($result);
	}
    public function testUpdateSuccessCase()
	{
        $id = 29;
        $data = [
            'title' => "Update TEST"
        ];
        $result = $this->obj->update($data,$id);
        $this->assertTrue($result);
	}
    public function testUpdateFailedCase()
	{
        $id = 0;
        $data = [
            'title' => "Update TEST"
        ];
        $result = $this->obj->update($data,$id);
        $this->assertFalse($result);
	}
    public function testDeleteSuccessCase()
	{
        $id = 58;
        $result = $this->obj->delete($id);
        $this->assertTrue($result);
	}
    public function testDeleteFailedCase()
	{
        $id = 0;
        $result = $this->obj->delete($id);
        $this->assertFalse($result);
	}
    public function testGetByIdSuccessCase()
	{
        $id = 26;
        $result = $this->obj->getById($id);
        $this->assertNotNull($result);
	}
    public function testGetByIdFailedCase()
	{
        $id = 0;
        $result = $this->obj->getById($id);
        $this->assertNull($result);
	}
    public function testGetAllCase()
	{
        $result = $this->obj->getAll();
        $this->assertNotNull($result);
	}
}