<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard_controller")
     */
    public function index(): Response
    {

        $em = $this->getDoctrine()->getManager();
        $Totalsalaries = $em->createQuery('SELECT COUNT(s) FROM App\Entity\Salary s')->getSingleScalarResult();
        $TotalEmployees = $em->createQuery('SELECT COUNT(e) FROM App\Entity\Employee e')->getSingleScalarResult();
        $TotalDepartements = $em->createQuery('SELECT COUNT(d) FROM App\Entity\Departement d')->getSingleScalarResult();
        $TotalAmount = $em->createQuery('SELECT SUM(s.amount) AS amount FROM App\Entity\Salary s')->getSingleScalarResult();

        $SalariesByDate = $em->createQuery('SELECT SUM(s.amount) AS amount ,d.date_from, d.year_from, d.month_from, d.day_from FROM App\Entity\Salary s, App\Entity\DatePayslips d WHERE s.id_date_payslips = d.id GROUP BY d.date_from')->getArrayResult();

        $SalariesByDepartement = $em->createQuery('SELECT SUM(s.amount) AS amount ,d.name FROM App\Entity\Salary s, App\Entity\Departement d WHERE s.id_departement = d.id GROUP BY s.id_departement')->getArrayResult();
        $SalariesByEmployee = $em->createQuery('SELECT SUM(s.amount) AS amount ,e.name FROM App\Entity\Salary s, App\Entity\Employee e WHERE s.id_employe = e.id GROUP BY s.id_employe')->getArrayResult();
        dump($SalariesByEmployee);

        

        //$Totalsalaries = $query->getSingleScalarResult();
       // dump($salarys);


        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'Total' => [
                'salaries' => $Totalsalaries,
                'employees' => $TotalEmployees,
                'departements' => $TotalDepartements,
                'amounts' => $TotalAmount,
            
            ],
            'salariesByDate' => $SalariesByDate,
            'salariesByDepartement' => $SalariesByDepartement,
            'salariesByEmployee' => $SalariesByEmployee,
        ]);
    }
}
