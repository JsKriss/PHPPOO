<?php


class Form
{
    private $method = 'post';
    private $url = '';
    private $uploadFile = false;
    private $iniFile;


    public function __construct( string $action, string $file)
    {
        $this->url = $action;
        $this->iniFile = parse_ini_file("./conf/$file.ini",true);

    }



    public function displayForm() : string
    {
        $html = '<form';
        $html .= 'method"'. $this->method.'" ';
        $html .= 'action="'.$this->url.'"';
        if ($this->uploadFile)
        {
            $html .=' enctype="multipart/form-data"';
        }
        $html .='>';

        foreach ($this->iniFile as $key => $value)
        {
            $typeBalise = explode(":", $key);
            var_dump($typeBalise);
            $html .= "<ul>";
            $html .= "<li>".$key."</li>";
            $html .= "</ul>";

            if ($typeBalise[0] === "input")
            {
                if ($this->iniFile[$key]['labelContent'] !== false){
                    $html .= '<div>';

                    $html .='<label for="' . $typeBalise[1] . '">'. ucfirst($typeBalise[1]).'</label>';
                    $html .= '<input type="' . $this->iniFile[$key]['type'] . '" '. 'id ="' .$typeBalise[1] . '"' . 'name="' .$typeBalise[1] .'"' . 'placeholder="Veuillez saisir votre' . $typeBalise[1].'"'. '/>';

                    $html .= '</div>';

                }
            }



        }

        $html .='</form>';
        return $html;
    }
}