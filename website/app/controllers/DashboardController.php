<?php

use JetBrains\PhpStorm\NoReturn;

class DashboardController
{
    /**
     * @throws Exception
     */
    public function index()
    {
        View::load('dashboard/home');
    }

    /**
     * @throws Exception
     */
    public function addCategory(): void
    {
        $typeProduct = new category();
        if (isset($_POST['submit'])) {
            extract($_POST);
            for ($i = 0; $i < count($_POST['productType']); $i++) {
                $data = array(
                    'libel' => $_POST['productType'][$i],
                    'desc' => $_POST['desc'][$i]
                );
                $typeProduct->insert($data);
            }
            notif::add('product Type added successfully', 'success');
            redirect('dashboard');
            exit();
        }
        view::load('dashboard/addCategory');
    }

    /**
     * @throws Exception
     */
    public function editCategory($id = 0): void
    {
        $data = [];
        $typeProduct = new category();
        if (isset($_POST['submit'])) {
            extract($_POST);
            $data = array(
                'libel' => $_POST['category'],
                'desc' => $_POST['desc']
            );
            if($typeProduct->update($id, $data)) {
                notif::add('category edited successfully', 'success');
            }else{
                notif::add('error in edit category', 'error');
            }
            redirect('dashboard');
            exit();
        } else if ($id != 0) {
            $tmp = $typeProduct->getRow($id);
            $data['libel'] = $tmp['libel'];
            $data['desc'] = $tmp['desc'];
            $data['id'] = $tmp['id'];
        }
        view::load('dashboard/editCategory', $data);
    }

    /**
     * @throws Exception
     */
    #[NoReturn] public function deletCategory($id): void
    {
        $category = new category();
        if ($category->delete($id)) {
            notif::add('category deleted successfully');
        } else {
            notif::add('error in deleted category','error');
        }
        redirect('dashboard');
        exit();
    }

    public function addProduct(): void
    {
        $Product = new Product();
        if (isset($_POST['submit'])) {
            extract($_POST);
            for ($i = 0; $i < count($_POST['productType']); $i++) {
                $data = array(
                    'libel' => $_POST['productType'][$i],
                    'desc' => $_POST['desc'][$i]
                );
                $typeProduct->insert($data);
            }
            notif::add('product Type added successfully', 'success');
        }
        redirect('dashboard');
    }



    public function deletCruises($id)
    {
        $db = new Croisiere();
        if ($db->delete($id)) {
            $data['success'] = "Product deleted successfully";
            redirect('dashboard');
        } else {
            echo "Error";
        }
    }

    public function addNavire()
    {
        $data = [];
        if (isset($_POST['submit'])) {
            extract($_POST);
            $data = array(
                'libelle' => $navirName,
                'numberOfRom' => $nbrrom,
                'numberOfPlaces' => $nbrprsn,
            );
            $db = new Navire();
            if ($db->insert($data)) {
                $data['success'] = "Navir added successfully";
            } else {
                $data['error'] = "Error ";
            }
        }

        View::load('dashboard/addNavire', $data);
    }

    public function deletNavire($id)
    {
        $db = new Navire();
        if ($db->delete($id)) {
            $data['success'] = "Navire deleted successfully";
            redirect('dashboard');
        } else {
            echo "Error";
        }
    }


    public function addPort()
    {
        if (isset($_POST['submit'])) {
            extract($_POST);
            $data = array(
                'name' => $portName,
                'countrie' => $countrie,
            );
            $db = new Port();
            if ($db->insert($data)) {
                $data['success'] = "Product added successfully";
                $data['port'] = $db->getAllPort();
            } else {
                $data['error'] = "Error ";
            }
        }

        $countrie = new countries();
        $data['countrie'] = $countrie->getAllCountries();
        View::load('dashboard/addPort', $data);
    }

    public function deletPort($id)
    {
        $db = new Port();
        if ($db->delete($id)) {
            $data['success'] = "Port deleted successfully";
            redirect('dashboard');
        } else {
            echo "Error";
        }
    }


    public function addRom()
    {
        if (isset($_POST['submit'])) {
            extract($_POST);
            $data = array(
                'typeRom' => $RomType,
                'navire' => $Navire,
                'numberOfRom' => $nbrRom,
                'capacity' => $capacity,
            );
            $db = new Rom();
            if ($db->insert($data)) {
                $data['success'] = "Product added successfully";
            } else {
                $data['error'] = "Error ";
            }
        }

        $RomType = new TypeRom();
        $Navire = new Navire();
        $data['RomType'] = $RomType->getAllTypeRom();
        $data['Navire'] = $Navire->getAllNavire();

        View::load('dashboard/addRom', $data);
    }

    public function deletRom($id)
    {
        $db = new Rom();
        if ($db->delete($id)) {
            $data['success'] = "Rom deleted successfully";
            redirect('dashboard');
        } else {
            echo "Error";
        }
    }

    public function addTypeRom()
    {
        $data = [];
        if (isset($_POST['submit'])) {
            extract($_POST);
            $data = array(
                'libelle' => $romName,
                'price' => $priceRom,
                'min' => $minprsn,
                'max' => $maxprsn,
            );
            $db = new TypeRom();
            if ($db->insert($data)) {
                $data['success'] = "Rom Type added successfully";
            } else {
                $data['error'] = "Error in adding Rom Type";
            }
        }
        View::load('dashboard/addtyperom', $data);
    }

    public function deletTypeRom($id)
    {
        $db = new TypeRom();
        if ($db->delete($id)) {
            $data['success'] = "Rom deleted successfully";
            redirect('dashboard');
        } else {
            echo "Error";
        }
    }


}