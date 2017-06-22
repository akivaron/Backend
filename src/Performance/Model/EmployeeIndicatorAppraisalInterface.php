<?php

namespace Persona\Hris\Performance\Model;

use Persona\Hris\Employee\Model\EmployeeInterface;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@personahris.com>
 */
interface EmployeeIndicatorAppraisalInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return null|EmployeeInterface
     */
    public function getEmployee(): ? EmployeeInterface;

    /**
     * @param EmployeeInterface $employee
     */
    public function setEmployee(EmployeeInterface $employee): void;

    /**
     * @return null|AppraisalPeriodInterface
     */
    public function getAppraisalPeriod(): ? AppraisalPeriodInterface;

    /**
     * @param AppraisalPeriodInterface $appraisalPeriod
     */
    public function setAppraisalPeriod(AppraisalPeriodInterface $appraisalPeriod): void;

    /**
     * @return \DateTime
     */
    public function getInputDate(): \DateTime;

    /**
     * @return null|IndicatorInterface
     */
    public function getIndicator(): ? IndicatorInterface;

    /**
     * @param IndicatorInterface $indicator
     */
    public function setIndicator(IndicatorInterface $indicator): void;

    /**
     * @return null|EmployeeInterface
     */
    public function getFirstSupervisorAppraisalBy(): ? EmployeeInterface;

    /**
     * @param EmployeeInterface $employee
     */
    public function setFirstSupervisorAppraisalBy(EmployeeInterface $employee): void;

    /**
     * @return null|EmployeeInterface
     */
    public function getSecondSupervisorAppraisalBy(): ? EmployeeInterface;

    /**
     * @param EmployeeInterface $employee
     */
    public function setSecondSupervisorAppraisalBy(EmployeeInterface $employee): void;

    /**
     * @return string
     */
    public function getSelfAppraisal(): string;

    /**
     * @return string
     */
    public function getFirstSupervisorAppraisal(): string;

    /**
     * @return string
     */
    public function getSecondSupervisorAppraisal(): string;

    /**
     * @return string
     */
    public function getSelfAppraisalComment(): string;

    /**
     * @return string
     */
    public function getFirstSupervisorAppraisalComment(): string;

    /**
     * @return string
     */
    public function getSecondSupervisorAppraisalComment(): string;
}
