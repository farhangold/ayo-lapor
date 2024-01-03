<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Report_test extends TestCase
{

    public function setUp(): void
    {
        $this->resetInstance();
        $this->CI->load->model('ReportModel');
        $this->obj = $this->CI->ReportModel;
    }

    public function testAddSuccessCase()
	{
        $data = [
            'jenis_laporan' => "TEST",
            'bukti_laporan' => "TEST BUKTI",
            'keterangan' => "TEST DESCRIPTION",
            'status' => "-",
            'tanggal' => date('Y-m-d'),
            'user' => "TEST"
        ];
        $result = $this->obj->insert($data);
        $this->assertTrue($result);
	}
    public function testAddFailedCase()
	{
        $data = [
            'status' => "-",
            'tanggal' => date('Y-m-d'),
            'user' => "TEST"
        ];
        $result = $this->obj->insert($data);
        $this->assertFalse($result);
	}
    public function testUpdateSuccessCase()
	{
        $id = 32;
        $data = [
            'jenis_laporan' => "Update TEST"
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
        $id = 35;
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
        $id = 32;
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