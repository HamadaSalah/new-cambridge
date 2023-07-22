<?php

namespace Database\Seeders;

use App\Models\IBDP;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IBDP::create([
            'sec1_head' => 'IBO Mission Statement',
            'sec1_p' => 'The International Baccalaureate aims to develop inquiring, knowledgeable and caring young people who help to create a better and more peaceful world through intercultural understanding and respect.

            To this end the IB works with schools, governments and international organizations to develop challenging programmes of international education and rigorous assessment.
            
            These programmes encourage students across the world to become active, compassionate and lifelong learners who understand that other people, with their differences, can also be right.',
            'sec1_img' => 'assets/images/Website%20pix/IBDP/5Q7C3512.jpg',
            'sec2_head' => 'About the IBDP programme',
            'sec2_p' => 'Students in the Secondary section are being prepared for the International Baccalaureate Diploma Programme. At different points in the upper grades; students will start their journey into the IB with activities in ATL Skills, internal assessments, CAS and TOK.

            The IB Programme is known and recognized worldwide as the finest pre-university education available. As a result, students who graduate with IB credentials have the choice to enter Jordanian universities or most universities aboard.',
            'sec2_img' => 'assets/images/Website%20pix/IBDP/IYYW1606.jpg',
            'sec3_head' => 'Admission into the IBDP',
            'sec3_p' => ' Admission into the IBDP starts with an application where subject choices and course of study are selected. All students are encouraged to try the diploma option. Teachers give feedback concerning the ability of students who selected a subject. Each individual student will be interviewed by the IBDP coordinator and/or head of school to check the compatibility of student with chosen programme, MOE requirements and future vocational requirements.

            For the 2019/ 2020 academic year CHS offers the following courses and levels:
            ',
            'sec3_img' => 'assets/images/Website%20pix/IBDP/IYYW1606.jpg',
            'sec4_head' => 'CHS three elements',
            'sec4_p' => 'Strongly committed to the principle of developing the whole person, the IB believes that this is best achieved by identifying and developing clearer and more explicit aims for and relationships between TOK, CAS and the extended essay. Support the interconnectedness of learning.

            All three elements of the core should be grounded in three coherent aims: Support, and be supported by, the academic disciplines. Foster international-mindedness. Develop self-awareness and a sense of identity.',
            'sec4_img' => 'assets/images/Website%20pix/IBDP/5Q7C3512.jpg',
            'sec5_head' => 'Fostering international-mindedness',
            'sec5_p' => 'The core has a responsibility to foster and nurture international-mindedness, with the ultimate goal of developing responsible global citizens. To a large extent, the core should be driven by the IB’s mission “to develop inquiring, knowledgeable and caring young people who help to create a better and more peaceful world through intercultural understanding and respect” and “encourage students across the world to become active, compassionate and lifelong learners who understand that other people, with their differences, can also be right” (IB mission statement).',
            'sec5_img' => 'assets/images/Website%20pix/IBDP/5Q7C7632.jpg',
            'sec6_head' => 'What is CAS and TOK',
            'sec6_p' => ' TOK guides students in making sense of their experiences as learners, and this includes their experiences in CAS.

            CAS experiences are an important source of students’ personal knowledge, providing students with the opportunity to gain awareness of the world in a range of diverse and challenging situations. Shared knowledge extends the idea from how individuals construct knowledge to how communities construct knowledge. In CAS, students might draw on TOK discussions that deepen understanding of different communities and cultures.'
        ]);    }
}
