<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array = $this->students_array();
        return view('dashboard/index', compact('array'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_student($id)
    {
        $array = $this->students_array()[$id];
        return view('dashboard/single_student', compact('array'));
    }
    public function show_all_attendance()
    {
        $array = $this->students_array();
        return view('dashboard/attendance', compact('array'));
    }
    public function student_attendance($id)
    {
        $array              = $this->students_array()[$id];
        $attendance_array   = $array['attendance'];

        return view('dashboard/single_attendance', compact('array', 'attendance_array'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
    }
    public function add_user(Request $request)
    {
        // $name = $request->input('first_name');
        $input = $request->all();

        $request->validate([
            'first_name'    => 'required|min:2|max:50',
            'last_name'     => 'required|min:2|max:50',
            'email'         => 'required|email',
            'password'      => 'required|confirmed|min:6',
            'gender'        => 'required',
            'phone_number'  => 'required',
        ]);
        return view('dashboard/register', ["input" => $input]);

    }
    public function students_array()
    {
        $students =
            array(
                array(
                    "id"                => 1,
                    "name"              => "Adam Abusamra",
                    "birthday"          => "25/10/2001",
                    "github_account"    => "https://github.com/adamabusamra/",
                    "linkedin"          => "https://www.linkedin.com/in/adam-abusamra/",
                    "image"             => "https://media-exp1.licdn.com/dms/image/C4E03AQEqFtVHK9XbbA/profile-displayphoto-shrink_400_400/0/1605016049903?e=1613606400&v=beta&t=EP_-Ib56NEZ854P9kAvY-d62gfiFxGyHqB5QOrY4u_I",
                    "projects"          => array(
                        array(
                            "project_name" => "Personal Portfolio",
                            "completed" => 1
                        ),
                        array(
                            "project_name" => "Dynamic Website JS",
                            "completed" => 1
                        ),
                        array(
                            "project_name" => "Wordpress Website",
                            "completed" => 1
                        ),
                        array(
                            "project_name" => "PHP e-commerce dynamic site",
                            "completed" => 1
                        )
                    ),
                    "attendance" => array(
                        array(
                            "check_in"      => "Dec 13, 2020, 09:00",
                            "check_out"     => "Dec 13, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 14, 2020, 09:00",
                            "check_out"     => "Dec 14, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 15, 2020, 09:00",
                            "check_out"     => "Dec 15, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 16, 2020, 09:00",
                            "check_out"     => "Dec 16, 2020, 16:00"
                        ),
                        array(
                            "check_in"      => "Dec 17, 2020, 09:00",
                            "check_out"     => "Dec 17, 2020, 17:00"
                        )
                    )
                ),
                array(
                    "id"                => 2,
                    "name"              => "Mohammad Yaqoub",
                    "birthday"          => "12/2/1996",
                    "github_account"    => "https://github.com/MohYacoub",
                    "linkedin"          => "https://www.linkedin.com/in/mohammadyacoub",
                    "image"             => "https://media-exp1.licdn.com/dms/image/C4E03AQFivRZGiqQABg/profile-displayphoto-shrink_400_400/0/1600874534239?e=1613606400&v=beta&t=l_fLB7ANsSErGURvnN4JB2d-4AdOCRisftf6yro5rsc",
                    "projects"          => array(
                        array(
                            "project_name" => "Personal Portfolio",
                            "completed" => 1
                        ),
                        array(
                            "project_name" => "Dynamic Website JS",
                            "completed" => 1
                        ),
                        array(
                            "project_name" => "Wordpress Website",
                            "completed" => 0
                        ),
                        array(
                            "project_name" => "PHP e-commerce dynamic site",
                            "completed" => 1
                        )
                    ),
                    "attendance" => array(
                        array(
                            "check_in"      => "Dec 13, 2020, 09:00",
                            "check_out"     => "Dec 13, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 14, 2020, 09:00",
                            "check_out"     => "Dec 14, 2020, 15:00"
                        ),
                        array(
                            "check_in"      => "Dec 15, 2020, 09:00",
                            "check_out"     => "Dec 15, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 16, 2020, 09:00",
                            "check_out"     => "Dec 16, 2020, 18:00"
                        ),
                        array(
                            "check_in"      => "Dec 17, 2020, 09:00",
                            "check_out"     => "Dec 17, 2020, 17:00"
                        )
                    )
                ),
                array(
                    "id"                => 3,
                    "name"              => "Sadi Ashlaq",
                    "birthday"          => "13/12/1997",
                    "github_account"    => "https://github.com/sadi/",
                    "linkedin"          => "www.linkedin.com/in/sadi-ashlaq",
                    "image"             => "https://media-exp1.licdn.com/dms/image/C5603AQFFXBi-puYdKg/profile-displayphoto-shrink_400_400/0/1600854238228?e=1613606400&v=beta&t=DC3_A8DP0DmD_LsFJj7rsht9So2SkuoPPJlnYnjPddE",
                    "projects"          => array(
                        array(
                            "project_name" => "Personal Portfolio",
                            "completed" => 1
                        ),
                        array(
                            "project_name" => "Dynamic Website JS",
                            "completed" => 1
                        ),
                        array(
                            "project_name" => "Wordpress Website",
                            "completed" => 1
                        ),
                        array(
                            "project_name" => "PHP e-commerce dynamic site",
                            "completed" => 1
                        )
                    ),
                    "attendance" => array(
                        array(
                            "check_in"      => "Dec 13, 2020, 09:00",
                            "check_out"     => "Dec 13, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 14, 2020, 11:00",
                            "check_out"     => "Dec 14, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 15, 2020, 09:00",
                            "check_out"     => "Dec 15, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 16, 2020, 09:00",
                            "check_out"     => "Dec 16, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 17, 2020, 09:00",
                            "check_out"     => "Dec 17, 2020, 17:00"
                        )
                    )
                ),
                array(
                    "id"                => 4,
                    "name"              => "Firas Diab",
                    "birthday"          => "25/10/2001",
                    "github_account"    => "https://github.com/firas-diab/",
                    "linkedin"          => "www.linkedin.com/in/firas",
                    "image"             => "https://scontent.famm7-1.fna.fbcdn.net/v/t31.0-8/22770834_1634613739932801_7646243513244540913_o.jpg?_nc_cat=101&ccb=2&_nc_sid=174925&_nc_eui2=AeGOcYRsSwDrFKey8cfNGmvd6Ehid6hww9_oSGJ3qHDD3yWivE52_jnDus66lfQNhQpaycf3Ep-K571yws0NsIY1&_nc_ohc=rVg785R0bT8AX_bXw91&_nc_ht=scontent.famm7-1.fna&oh=45900ad2326ba370d219467eeb0396d6&oe=6000714D",
                    "projects"          => array(
                        array(
                            "project_name" => "Personal Portfolio",
                            "completed" => 0
                        ),
                        array(
                            "project_name" => "Dynamic Website JS",
                            "completed" => 1
                        ),
                        array(
                            "project_name" => "Wordpress Website",
                            "completed" => 1
                        ),
                        array(
                            "project_name" => "PHP e-commerce dynamic site",
                            "completed" => 1
                        )
                    ),
                    "attendance" => array(
                        array(
                            "check_in"      => "Dec 13, 2020, 09:00",
                            "check_out"     => "Dec 13, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 14, 2020, 09:00",
                            "check_out"     => "Dec 14, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 15, 2020, 08:00",
                            "check_out"     => "Dec 15, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 16, 2020, 09:00",
                            "check_out"     => "Dec 16, 2020, 16:00"
                        ),
                        array(
                            "check_in"      => "Dec 17, 2020, 09:00",
                            "check_out"     => "Dec 17, 2020, 17:00"
                        )
                    )
                ),
                array(
                    "id"                => 5,
                    "name"              => "Omar Alnawaisah",
                    "birthday"          => "13/05/1998",
                    "github_account"    => "https://github.com/omar-alnawaysah/",
                    "linkedin"          => "www.linkedin.com/in/omar-nawaysah",
                    "image"             => "https://ca.slack-edge.com/T01ANQW3AK0-U01BD2N7VQD-863e6442f94f-512",
                    "projects"          => array(
                        array(
                            "project_name" => "Personal Portfolio",
                            "completed" => 1
                        ),
                        array(
                            "project_name" => "Dynamic Website JS",
                            "completed" => 1
                        ),
                        array(
                            "project_name" => "Wordpress Website",
                            "completed" => 1
                        ),
                        array(
                            "project_name" => "PHP e-commerce dynamic site",
                            "completed" => 1
                        )
                    ),
                    "attendance" => array(
                        array(
                            "check_in"      => "Dec 13, 2020, 09:00",
                            "check_out"     => "Dec 13, 2020, 02:00"
                        ),
                        array(
                            "check_in"      => "Dec 14, 2020, 09:00",
                            "check_out"     => "Dec 14, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 15, 2020, 09:00",
                            "check_out"     => "Dec 15, 2020, 17:00"
                        ),
                        array(
                            "check_in"      => "Dec 16, 2020, 09:00",
                            "check_out"     => "Dec 16, 2020, 16:00"
                        ),
                        array(
                            "check_in"      => "Dec 17, 2020, 09:00",
                            "check_out"     => "Dec 17, 2020, 17:00"
                        )
                    )
                ),
            );

        return $students;
    }
}
