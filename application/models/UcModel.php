<?php defined('BASEPATH') OR exit('No direct script access allowed');

class UcModel extends CI_Model {

    //Choix de la table
    function __construct()
    {
        parent::__construct();
        $this->table = "ttp_uc";
    }

    //Recupere le niveau
    function get_one($ttp_cv_cv_id, $ttp_competences_competence_id)
    {
        $this->db->select('uc_niv')
            ->from($this->table)
            ->where("ttp_cv_cv_id", $ttp_cv_cv_id)
            ->where("ttp_competences_competence_id", $ttp_competences_competence_id);


        return $this->db->get();
    }

    //Insertion du niveau
    function creation_lien_competences($cv_id)
    {

        $data_form3 = $this->input->post(NULL, TRUE);

        $data = array(
            "uc_niv" => $data_form3['niveau2'],
            "ttp_cv_cv_id" => $cv_id,
            "ttp_competences_competences_id" => $data_form3['competences']
        );

        $this->db->insert($this->table, $data);

}

    //Modification du niveau
    function put($ttp_cv_cv_id,$ttp_competences_competence_id, $uc_niv)
    {
        $data = array(
            "uc_niv" => $uc_niv
        );

        $this->db->where("ttp_cv_cv_id", $ttp_cv_cv_id)
                    ->where("ttp_competences_competence_id", $ttp_competences_competence_id)
            ->update($this->table, $data);
    }

}

/* End of file Model_product.php */
/* Location: ./application/models/Model_product.php */
