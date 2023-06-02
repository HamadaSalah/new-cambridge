<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Event;
use App\Models\EventGall;
use App\Models\FacCategory;
use App\Models\GallCategory;
use App\Models\HomeSlider;
use App\Models\Polices;
use App\Models\ReachUs;
use App\Models\Tut;
use App\Models\Welcome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@cambridge.com',
            'password' => bcrypt('cambridgeAdmin'),
        ]);
        HomeSlider::create([
            'top_head' => 'CAMBRIDGE<br/>
            HIGH SCHOOL',
            'img' => 'assets/images/Website pix/Home,About us/315012388_1267336400536114_875531598212375266_n.jpg',
            'head' => 'Cambridge High School is fully devoted to its
            students’ academic and future success. Through the
            implementation of the International Baccalaureate
            Programmes, a balanced learning environment is
            created to develop well-rounded, life-long learners.'
        ]);
        HomeSlider::create([
            'top_head' => 'CAMBRIDGE<br/>
            HIGH SCHOOL',
            'img' => 'assets/images/Website pix/Home,About us/315012388_1267336400536114_875531598212375266_n.jpg',
            'head' => 'Cambridge High School is fully devoted to its
            students’ academic and future success. Through the
            implementation of the International Baccalaureate
            Programmes, a balanced learning environment is
            created to develop well-rounded, life-long learners.'
        ]);
        Event::create([
            'title' => 'Card title',
            'example' => 'Some Example',
            'Date' => '2023-03-01'
        ]);
        Event::create([
            'title' => 'Card title',
            'example' => 'Some Example',
            'Date' => '2023-03-01'
        ]);
        Event::create([
            'title' => 'Card title',
            'example' => 'Some Example',
            'Date' => '2023-03-01'
        ]);
        Event::create([
            'title' => 'Card title',
            'example' => 'Some Example',
            'Date' => '2023-03-01'
        ]);
        Event::create([
            'title' => 'Card title',
            'example' => 'Some Example',
            'Date' => '2023-03-01'
        ]);
        Event::create([
            'title' => 'Card title',
            'example' => 'Some Example',
            'Date' => '2023-03-01'
        ]);
        //Gall Categories ties
        GallCategory::create([
            'name' => 'Facilities'
        ]);
        GallCategory::create([
            'name' => 'Graduations'
        ]);
        GallCategory::create([
            'name' => 'Sports'
        ]);
        GallCategory::create([
            'name' => 'IBDP-CAS'
        ]);
        GallCategory::create([
            'name' => 'Performances'
        ]);
        GallCategory::create([
            'name' => 'KG Activities'
        ]);
        GallCategory::create([
            'name' => 'Orientations& Presentations'
        ]);
        GallCategory::create([
            'name' => 'Celebrations'
        ]);
        FacCategory::create([
            'name' => 'LIBRARY'
        ]);
        FacCategory::create([
            'name' => 'MUSIC'
        ]);
        FacCategory::create([
            'name' => 'CLASS ROOM'
        ]);
        FacCategory::create([
            'name' => 'PHOTOGRAPHY'
        ]);
        FacCategory::create([
            'name' => 'THEATRE'
        ]);
        Welcome::create([
            'img' => 'assets/images/Website pix/Home,About us/467.jpg',
            'open_in' => 'Opened its doors in September, 2000',
            'desc' => 'We have successfully graduated 14 classes with all students moving on to university.            ',
            'his_img' => 'assets/images/Website pix/Home,About us/5Q7C3351.jpg',
            'his_desc' => 'We have successfully graduated 14 classes with all students moving on to university. We are an IB World School since March, 2004. We follow the diploma programme as set by the International Baccalaureate Organization. Our school enrollment hovers around 1000 – 1200 students from 3 – 18 years old. CHS student body is composed of children from 30 different countries.

            Located in Rabia puts us in the heart of west Amman. We believe in hard work and discipline and respect and enjoyment. A top priority that goes hand in hand with our academic work is our activity programme. Please check the facilities and activities sections on our website for a full list of what makes our school special. Our doors are open. We wait your visit.',
            'mis_img' => 'assets/images/Website pix/Home,About us/051.jpg',
            'mis_desc' => 'Cambridge High School is fully devoted to its students’ academic and future success. Through the implementation of the International Baccalaureate Programmes, a balanced learning environment is created to develop well-rounded, life-long learners. All students are equipped with the tools needed to develop skills necessary to meet life’s challenges through a high level of discipline, a rigorous curriculum with assessments, a multitude of service initiatives and a wide variety of extracurricular activities. It is our desire that our students develop into caring young people who strive to understand that all people are unique and by working together, with respect to all, we can make a better and more peaceful world.

            ',
            'vis_img' => 'assets/images/Website pix/Home,About us/5Q7C9857.jpg',
            'vis_desc' => 'Cambridge High School aims to recognize its students’ full potential and to elevate them towards future excellence. CHS aspires to enrich the society with internationally minded innovators who are nevertheless capable of maintaining a deeply-rooted pride in their culture, and who are also willing to contribute positively and proudly to their community and the world.            ',
        ]);
        ReachUs::create([
            'head' => 'Welcomel! We look forward to hearing from you whether it be compliments, complaints, or concerns and encourage open lines of communication with the appropriate parties. If for any reason your compliments, complaints or concerns have passed without acknowledgement and/or resolution, we encourage you to submit a written compliment or complaint through this portal.. Your complaint will be seen, confidentially, who will then manage or delegate your concern.            ',
            'f_img' => 'assets/images/Website pix/Reach us/5Q7C4516.jpg',
            'email' => 'cambridge@cambridge.edu.jo',
            'phone1' => '+962 6 551 2556',
            'phone2' => '+962 79 900 0533',
            'l_img' => 'assets/images/Website pix/Reach us/5Q7C0597.jpg',
        ]);
        Tut::create([
            'class' => 'KG1',
            'amount' => '200',
            'count' => '3',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023'],
        ]);
        Tut::create([
            'class' => 'KG*',
            'amount' => '200',
            'count' => '3',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023'],
        ]);
        Tut::create([
            'class' => 'KG2',
            'amount' => '200',
            'count' => '3',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023'],
        ]);
        Tut::create([
            'class' => 'First Grade',
            'amount' => '200',
            'count' => '4',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023', '1/12/2023'],
        ]);
        Tut::create([
            'class' => 'Second Grade',
            'amount' => '200',
            'count' => '4',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023', '1/12/2023'],
        ]);
        Tut::create([
            'class' => 'Third Grade',
            'amount' => '200',
            'count' => '4',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023', '1/12/2023'],
        ]);
        Tut::create([
            'class' => 'Fourth Grade',
            'amount' => '200',
            'count' => '4',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023', '1/12/2023'],
        ]);
        Tut::create([
            'class' => 'Fifth Grade',
            'amount' => '200',
            'count' => '4',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023', '1/12/2023'],
        ]);
        Tut::create([
            'class' => 'Sixth Grade',
            'amount' => '200',
            'count' => '4',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023', '1/12/2023'],
        ]);
        Tut::create([
            'class' => 'Seventh Grade',
            'amount' => '200',
            'count' => '4',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023', '1/12/2023'],
        ]);
        Tut::create([
            'class' => 'Eighth Grade',
            'amount' => '200',
            'count' => '4',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023', '1/12/2023'],
        ]);
        Tut::create([
            'class' => 'Nineteenth Grade',
            'amount' => '200',
            'count' => '4',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023', '1/12/2023'],
        ]);
        Tut::create([
            'class' => 'Tenth Grade',
            'amount' => '200',
            'count' => '4',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023', '1/12/2023'],
        ]);
        Tut::create([
            'class' => 'eleventh Grade',
            'amount' => '200',
            'count' => '4',
            'dates' => ['1/4/2023', '1/6/2023', '1/8/2023', '1/12/2023'],
        ]);
        Polices::create([
            'head' => 'A high level of discipline is expected in the school. Any student who does not abide by school rules will be sent to the Students Affairs Department to be dealt with accordingly. NO EXCEPTIONS WILL BE MADE!            ',
            'head_img' => 'assets/images/Website pix/Home,About us/467.jpg',
            'f_p' => '1.Parents are not allowed to discuss student’s class sectioning with any of the school staff as this is the administration’s job. 2.Academic honesty is a core principle of the school and the IBO. Violations will be dealt with according to MOE “Ministry of Education” and IB regulations. 3.Students are held accountable for any behaviour, whether inside or outside the school, which the administration feels reflects badly on the school or its reputation. 4.Interrupting the educational process inside or outside the classroom is taken seriously. 5.Students must be in school before 7:30 am. Tardiness is recorded and excessive lateness may affect registration for the coming year. 5.Students must be in school before 7:30 am. Tardiness is recorded and excessive lateness may affect registration for the coming year.',
            'f_p_img' => 'assets/images/Website pix/Rules/5Q7C2800.jpg',
            'second_p' => '6.15 minutes after the end of the school day, parents are responsible for any accident or injury concerning their child and NOT the school.<br/>

            7.Students are required to obey the Jordanian Ministry of Education and IB rules of attendance. Excessive absence may result in repeating the grade in the following academic year.<br/>
            
            8.If a student is sick on an exam day, s/he must be examined by the school clinic or the absence will be considered unexcused and the student will be given a zero. Sick reports from outside the school are not accepted.<br/>
            
            9.Students are not allowed to leave the school premises during school hours without written permission from the school. This includes breaks and study periods.<br/>
            
            10.If the student is absent for any reason, parents must inform the school administration of the duration and the reason of absence.<br/>
            
            11.Travelling is not allowed during assessments. However, all students who must travel during assessments for emergencies ONLY must get the school’s approval and pay JD 30 fee for each exam to be retaken.<br/>
            
            12.Bullying in any form will not be tolerated.<br/>
            
            13.Rough play is not acceptable, neither is bad language.<br/>
            
            14.Payment for hospitalization that results from physical violence is the responsibility of the aggressive student.<br/>
            
            15.Report of misconduct on buses may result in suspension or discontinuation of bus service.',
            'third_p' => '16.School uniform is worn with pride at all times..<br/>

            17.P.E. uniform is to be worn on days when students have P.E. lessons only.ss only.<br/>
            
            18.Nail polish and make-up are strictly forbidden.<br/>
            
            19.Hair should be kept neat and clean. Long hair is to be tied back. Only Warm Red, grey, navy, black, white or brown headbands and rubber bands are allowed. Barrettes should be simple and plain, for our students’ safety.<br/>
            
            20.All jewellery, including stud earrings or body piercings, is prohibited. Students are only allowed to wear a watch “without a camera,calculator or internet access” as an accessory.<br/>
            
            21.Mobile phones and cameras are strictly forbidden. Mobile phones are available in the administration for emergencies.<br/>
            
            22.Littering is unacceptable and dealt with severely.<br/>
            
            23.Students must pay for unreturned library books or damage done to school property.',
            'third_p_img' => 'assets/images/Website pix/Rules/5Q7C7327.jpg',
            'parent_h' => 'Your child’s progress is our top priority. Your trust in this area is mandatory if the maximum is to be achieved for your child.

            The IB learner profile, as a character model, is encouraged throughout the school. Parents and students should be 100% committed to the school policies in behavior and academic performance.
            
            Those who do not fit the profile of a Cambridge High School student will be helped by our support staff, counsellors and students affairs. Should a student fail to fit into our school’s culture, appropriate steps are taken to find a more suitable educational establishment.
            
            Necessary disciplinary steps will be taken according to the behaviour. Parents are informed whenever the school feels their direct support is needed. Registration at CHS is done on a yearly basis. Attending Cambridge High School is not automatically renewed. At the end of every year each student’s record is reviewed.
            
            Travel plans should only be confirmed according to holidays as on the school agenda. Student attendance starts from the first day of school and ends on the last day. Exceeding the number of allowed absences according to the Ministry of Education and IB regulations will result in the repetition of the academic grade level.',
            'parent_img' => 'assets/images/Website pix/MYP/267.jpg',
            'parent_p' => 'Your child’s progress is our top priority. Your trust in this area is mandatory if the maximum is to be achieved for your child.

            The IB learner profile, as a character model, is encouraged throughout the school. Parents and students should be 100% committed to the school policies in behaviour and academic performance.<br/>
            
            8.If a student is sick on an exam day, s/he must be examined by the school clinic or the absence will be considered unexcused and the student will be given a zero. Sick reports from outside the school are not accepted.<br/>
            
            Those who do not fit the profile of a Cambridge High School student will be helped by our support staff, counsellors and students affairs. Should a student fail to fit into our school’s culture, appropriate steps are taken to find a more suitable educational establishment.<br/>
            
            Necessary disciplinary steps will be taken according to the behaviour. Parents are informed whenever the school feels their direct support is needed. Registration at CHS is done on a yearly basis. Attending Cambridge High School is not automatically renewed. At the end of every year each student’s record is reviewed.<br/>
            
            Travel plans should only be confirmed according to holidays as on the school agenda. Student attendance starts from the first day of school and ends on the last day. Exceeding the number of allowed absences according to the Ministry of Education and IB regulations will result in the repetition of the academic grade level.',
        ]);
        EventGall::create([
            'img' => 'assets/images/Website pix/5Q7C3951.jpg'
        ]);
        EventGall::create([
            'img' => 'assets/images/Website pix/Picture 400.jpg'
        ]);
    }
}
