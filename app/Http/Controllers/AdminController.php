<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->AdminModel = new AdminModel();
    }

    public function index()
    {
        return view('admin_dashboard');
    }

    //awal controller admin ->untuk menu user 
    public function m_user()
    {
        $data = [
            'users' => $this->AdminModel->allDataUsers(),
        ];
        return view('admin_m_user', $data);
    }

    public function add_users()
    {
        return view('v_add_users');
    }

    public function insert_users()
    {
        Request()->validate(
            [
                'nama_user' => 'required',
                'email_user' => 'required|unique:tbl_user,email_user|',
                'password_user' => 'required',
            ],
            [
                'nama_user.required' => 'Nama User Wajib Diisi !!!',
                'email_user.required' => 'Email User Wajib Diisi !!!',
                'email_user.unique' => 'Email Sudah Tersedia,Silahkan Ganti Yang Belum Ada !!!',
                'password_user.required' => 'Password User Wajib Diisi !!!',
            ]
        );

        //jika validasi tidak ada maka akan simpan data

        $data = [
            'nama_user' => Request()->nama_user,
            'email_user' => Request()->email_user,
            'password_user' => Request()->password_user
        ];

        $this->AdminModel->addDataUsers($data);
        return redirect()->route('m_user')->with('pesan', 'User Berhasil Ditambahkan !!!!');
    }

    public function edit_users($id_user)
    {
        if (!$this->AdminModel->detailDataUsers($id_user)) {
            abort(404);
        }
        $data = [
            'users' => $this->AdminModel->detailDataUsers($id_user),
        ];
        return view('v_edit_users', $data);
    }

    public function update_users($id_user)
    {
        Request()->validate(
            [
                'nama_user' => 'required',
                'email_user' => 'required',
                'password_user' => 'required',
            ],
            [
                'nama_user.required' => 'Nama User Wajib Diisi !!!',
                'email_user.required' => 'Email User Wajib Diisi !!!',
                'password_user.required' => 'Password User Wajib Diisi !!!'
            ]
        );

        //jika validasi tidak ada maka akan simpan data

        $data = [
            'nama_user' => Request()->nama_user,
            'email_user' => Request()->email_user,
            'password_user' => Request()->password_user
        ];

        $this->AdminModel->editDataUsers($id_user, $data);
        return redirect()->route('m_user')->with('pesan', 'Data User Berhasil Diupdate !!!!');
    }

    public function delete_users($id_user)
    {
        $this->AdminModel->deleteDataUsers($id_user);
        return redirect()->route('m_user')->with('pesan', 'Data Berhasil Dihapus !!!!');
    }

    //akhir controller admin ->untuk menu user 



    // awal controller admin-> untuk menu jenis tagihan
    public function m_tagihan()
    {
        $data = [
            'tagihan' => $this->AdminModel->allDataTagihan(),
        ];
        return view('admin_m_tagihan', $data);
    }

    public function detail_Mtagihan($id_tagihan)
    {
        if (!$this->AdminModel->detailDataTagihan($id_tagihan)) {
            abort(404);
        }
        $data = [
            'tagihan' => $this->AdminModel->detailDataTagihan($id_tagihan),
        ];
        return view('v_detail_tagihan', $data);
    }

    public function add_Mtagihan()
    {
        return view('v_add_tagihan');
    }

    public function insert()
    {
        Request()->validate(
            [
                'kode_tagihan' => 'required|unique:tbl_tagihan,kode_tagihan|min:2|max:4',
                'nama_tagihan' => 'required',
                'nominal_tagihan' => 'required',
            ],
            [
                'kode_tagihan.required' => 'Kode Tagihan Wajib Diisi !!!',
                'kode_tagihan.unique' => 'Kode Tagihan Sudah Tersedia,Silahkan Ganti Yang Belum Ada !!!',
                'kode_tagihan.min' => 'Kode Tagihan Minimal 2 Karakter!!!',
                'kode_tagihan.max' => 'Kode Tagihan Maksimal 4 Karakter!!!'
            ]
        );

        //jika validasi tidak ada maka akan simpan data

        $data = [
            'kode_tagihan' => Request()->kode_tagihan,
            'nama_tagihan' => Request()->nama_tagihan,
            'nominal_tagihan' => Request()->nominal_tagihan
        ];

        $this->AdminModel->addData($data);
        return redirect()->route('m_tagihan')->with('pesan', 'Data Berhasil Ditambahkan !!!!');
    }

    public function edit_Mtagihan($id_tagihan)
    {
        if (!$this->AdminModel->detailDataTagihan($id_tagihan)) {
            abort(404);
        }
        $data = [
            'tagihan' => $this->AdminModel->detailDataTagihan($id_tagihan),
        ];
        return view('v_edit_tagihan', $data);
    }

    public function update($id_tagihan)
    {
        Request()->validate(
            [
                'kode_tagihan' => 'required|min:2|max:4',
                'nama_tagihan' => 'required',
                'nominal_tagihan' => 'required',
            ],
            [
                'kode_tagihan.required' => 'Kode Tagihan Wajib Diisi !!!',
                'kode_tagihan.min' => 'Kode Tagihan Minimal 2 Karakter!!!',
                'kode_tagihan.max' => 'Kode Tagihan Maksimal 4 Karakter!!!'
            ]
        );

        //jika validasi tidak ada maka akan simpan data

        $data = [
            'kode_tagihan' => Request()->kode_tagihan,
            'nama_tagihan' => Request()->nama_tagihan,
            'nominal_tagihan' => Request()->nominal_tagihan
        ];

        $this->AdminModel->editData($id_tagihan, $data);
        return redirect()->route('m_tagihan')->with('pesan', 'Data Berhasil Diupdate !!!!');
    }

    public function delete_Mtagihan($id_tagihan)
    {
        $this->AdminModel->deleteData($id_tagihan);
        return redirect()->route('m_tagihan')->with('pesan', 'Data Berhasil Dihapus !!!!');
    }
    // akhir controller admin-> untuk menu jenis tagihan


    // awal controller admin-> untuk menu tagihan
    public function tagihan()
    {
        $data = [
            'user' => $this->AdminModel->allDataUsers(),
            'tagihan' => $this->AdminModel->allDataTagihan(),
        ];
        return view('admin_tagihan', $data);
    }

    public function insert_tagihan()
    {
        Request()->validate(
            [
                'id_user' => 'required',
                'id_tagihan' => 'required',
            ],
            [
                'id_user.required' => 'User Wajib Diisi !!!',
                'id_tagihan.required' => 'Jenis Tagihan Wajib Diisi !!!',
            ]
        );

        //jika validasi tidak ada maka akan simpan data

        $data = [
            'id_user' => Request()->id_user,
            'id_tagihan' => Request()->id_tagihan,
            'nominal_tagihan' => Request()->nominal_tagihan,
            'catatan_admin' => Request()->catatan_admin
        ];

        $this->AdminModel->inputDataTagihan($data);
        return redirect()->route('tagihan')->with('pesan', 'Data Tagihan Berhasil Ditambahkan !!!!');
    }


    public function getDataTagihan()
    {
        $id_tagihan = Request()->tagihan;

        $getdatatagihan = $this->AdminModel->get_data_tagihan($id_tagihan);
        //var_dump($getdatakel);

        echo json_encode($getdatatagihan);
    }
    // akhir controller admin-> untuk menu tagihan







    public function m_user_iuran()
    {
        $data = [
            'iuran' => $this->AdminModel->allTransaksiAdmin(),
        ];
        return view('user_dashboard', $data);
    }
}
