<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItalyController extends Controller
{
    public function index()
    {
        $industryKeys = [
            'qsectorr1' => 'Agriculture',
            'qsectorr2' => 'Business/IT Services',
            'qsectorr3' => 'Financial Services',
            'qsectorr4' => 'Healthcare',
            'qsectorr5' => 'Manufacturing',
            'qsectorr6' => 'Retail & Wholesale',
            'qsectorr7' => 'Telecom/Media',
            'qsectorr8' => 'Transport/Logistics',
            'qsectorr9' => 'Utilities/OilGas',
        ];
        $sizeKeys = [
            'qsizer1' => '10-249',
            'qsizer2' => '250-499',
            'qsizer3' => '500-999',
            'qsizer4' => '1,000+',
        ];
        $industryReference = [
            'q1' => [
                'qsectorr1' => [
                    'q1r1' => 2,
                    'q1r2' => 6,
                    'q1r3' => 7,
                    'q1r4' => 5,
                    'q1r5' => 12,
                    'q1r6' => 1,
                    'q1r7' => 7,
                    'q1r8' => 11,
                    'q1r9' => 2,
                    'q1r10' => 4,
                    'q1r11' => 9,
                    'q1r12' => 10,
                ],
                'qsectorr2' => [
                    'q1r1' => 2,
                    'q1r2' => 9,
                    'q1r3' => 5,
                    'q1r4' => 3,
                    'q1r5' => 7,
                    'q1r6' => 4,
                    'q1r7' => 8,
                    'q1r8' => 10,
                    'q1r9' => 11,
                    'q1r10' => 5,
                    'q1r11' => 11,
                    'q1r12' => 1,
                ],
                'qsectorr3' => [
                    'q1r1' => 2,
                    'q1r2' => 11,
                    'q1r3' => 12,
                    'q1r4' => 10,
                    'q1r5' => 9,
                    'q1r6' => 3,
                    'q1r7' => 1,
                    'q1r8' => 8,
                    'q1r9' => 6,
                    'q1r10' => 3,
                    'q1r11' => 6,
                    'q1r12' => 5,
                ],
                'qsectorr4' => [
                    'q1r1' => 4,
                    'q1r2' => 10,
                    'q1r3' => 7,
                    'q1r4' => 11,
                    'q1r5' => 1,
                    'q1r6' => 9,
                    'q1r7' => 5,
                    'q1r8' => 12,
                    'q1r9' => 6,
                    'q1r10' => 3,
                    'q1r11' => 7,
                    'q1r12' => 2,
                ],
                'qsectorr5' => [
                    'q1r1' => 6,
                    'q1r2' => 4,
                    'q1r3' => 7,
                    'q1r4' => 8,
                    'q1r5' => 2,
                    'q1r6' => 5,
                    'q1r7' => 11,
                    'q1r8' => 12,
                    'q1r9' => 9,
                    'q1r10' => 1,
                    'q1r11' => 10,
                    'q1r12' => 3,
                ],
                'qsectorr6' => [
                    'q1r1' => 4,
                    'q1r2' => 12,
                    'q1r3' => 9,
                    'q1r4' => 7,
                    'q1r5' => 5,
                    'q1r6' => 1,
                    'q1r7' => 6,
                    'q1r8' => 10,
                    'q1r9' => 2,
                    'q1r10' => 3,
                    'q1r11' => 11,
                    'q1r12' => 7,
                ],
                'qsectorr7' => [
                    'q1r1' => 2,
                    'q1r2' => 12,
                    'q1r3' => 8,
                    'q1r4' => 6,
                    'q1r5' => 6,
                    'q1r6' => 1,
                    'q1r7' => 3,
                    'q1r8' => 11,
                    'q1r9' => 9,
                    'q1r10' => 5,
                    'q1r11' => 9,
                    'q1r12' => 3,
                ],
                'qsectorr8' => [
                    'q1r1' => 7,
                    'q1r2' => 9,
                    'q1r3' => 9,
                    'q1r4' => 5,
                    'q1r5' => 1,
                    'q1r6' => 4,
                    'q1r7' => 7,
                    'q1r8' => 11,
                    'q1r9' => 2,
                    'q1r10' => 6,
                    'q1r11' => 11,
                    'q1r12' => 3,
                ],
                'qsectorr9' => [
                    'q1r1' => 1,
                    'q1r2' => 1,
                    'q1r3' => 1,
                    'q1r4' => 8,
                    'q1r5' => 5,
                    'q1r6' => 7,
                    'q1r7' => 1,
                    'q1r8' => 11,
                    'q1r9' => 8,
                    'q1r10' => 8,
                    'q1r11' => 11,
                    'q1r12' => 5,
                ],
            ],
            'q2' => [
                'qsectorr1' => [
                    'q2r1' => 6,
                    'q2r2' => 4,
                    'q2r3' => 3,
                    'q2r4' => 2,
                    'q2r5' => 6,
                    'q2r6' => 5,
                    'q2r7' => 8,
                    'q2r8' => 1,
                ],
                'qsectorr2' => [
                    'q2r1' => 1,
                    'q2r2' => 2,
                    'q2r3' => 3,
                    'q2r4' => 5,
                    'q2r5' => 4,
                    'q2r6' => 6,
                    'q2r7' => 8,
                    'q2r8' => 7,
                ],
                'qsectorr3' => [
                    'q2r1' => 6,
                    'q2r2' => 4,
                    'q2r3' => 3,
                    'q2r4' => 4,
                    'q2r5' => 2,
                    'q2r6' => 6,
                    'q2r7' => 1,
                    'q2r8' => 6,
                ],
                'qsectorr4' => [
                    'q2r1' => 8,
                    'q2r2' => 4,
                    'q2r3' => 2,
                    'q2r4' => 5,
                    'q2r5' => 2,
                    'q2r6' => 5,
                    'q2r7' => 7,
                    'q2r8' => 1,
                ],
                'qsectorr5' => [
                    'q2r1' => 6,
                    'q2r2' => 6,
                    'q2r3' => 5,
                    'q2r4' => 1,
                    'q2r5' => 3,
                    'q2r6' => 1,
                    'q2r7' => 4,
                    'q2r8' => 8,
                ],
                'qsectorr6' => [
                    'q2r1' => 2,
                    'q2r2' => 3,
                    'q2r3' => 6,
                    'q2r4' => 4,
                    'q2r5' => 1,
                    'q2r6' => 5,
                    'q2r7' => 6,
                    'q2r8' => 8,
                ],
                'qsectorr7' => [
                    'q2r1' => 6,
                    'q2r2' => 2,
                    'q2r3' => 6,
                    'q2r4' => 1,
                    'q2r5' => 3,
                    'q2r6' => 8,
                    'q2r7' => 5,
                    'q2r8' => 3,
                ],
                'qsectorr8' => [
                    'q2r1' => 5,
                    'q2r2' => 3,
                    'q2r3' => 3,
                    'q2r4' => 1,
                    'q2r5' => 2,
                    'q2r6' => 8,
                    'q2r7' => 5,
                    'q2r8' => 5,
                ],
                'qsectorr9' => [
                    'q2r1' => 6,
                    'q2r2' => 4,
                    'q2r3' => 1,
                    'q2r4' => 5,
                    'q2r5' => 2,
                    'q2r6' => 6,
                    'q2r7' => 6,
                    'q2r8' => 3,
                ],
            ],
            'q4' => [
                'qsectorr1' => [
                    'q4r1' => 2.60,
                    'q4r2' => 2.98,
                    'q4r3' => 3.11,
                    'q4r4' => 3.11,
                    'q4r5' => 3.23,
                    'q4r6' => 2.77,
                    'q4r7' => 3.06,
                ],
                'qsectorr2' => [
                    'q4r1' => 2.71,
                    'q4r2' => 3.18,
                    'q4r3' => 3.83,
                    'q4r4' => 3.31,
                    'q4r5' => 3.58,
                    'q4r6' => 3.22,
                    'q4r7' => 3.28,
                ],
                'qsectorr3' => [
                    'q4r1' => 2.94,
                    'q4r2' => 3.17,
                    'q4r3' => 3.65,
                    'q4r4' => 3.21,
                    'q4r5' => 3.65,
                    'q4r6' => 2.87,
                    'q4r7' => 3.23,
                ],
                'qsectorr4' => [
                    'q4r1' => 2.63,
                    'q4r2' => 3.07,
                    'q4r3' => 3.31,
                    'q4r4' => 3.08,
                    'q4r5' => 3.27,
                    'q4r6' => 2.76,
                    'q4r7' => 3.01,
                ],
                'qsectorr5' => [
                    'q4r1' => 3.00,
                    'q4r2' => 3.20,
                    'q4r3' => 3.43,
                    'q4r4' => 3.31,
                    'q4r5' => 3.30,
                    'q4r6' => 3.03,
                    'q4r7' => 3.03,
                ],
                'qsectorr6' => [
                    'q4r1' => 2.82,
                    'q4r2' => 3.27,
                    'q4r3' => 3.64,
                    'q4r4' => 3.11,
                    'q4r5' => 3.55,
                    'q4r6' => 3.33,
                    'q4r7' => 3.11,
                ],
                'qsectorr7' => [
                    'q4r1' => 2.78,
                    'q4r2' => 3.67,
                    'q4r3' => 4.15,
                    'q4r4' => 3.26,
                    'q4r5' => 3.78,
                    'q4r6' => 3.07,
                    'q4r7' => 3.07,
                ],
                'qsectorr8' => [
                    'q4r1' => 2.94,
                    'q4r2' => 3.14,
                    'q4r3' => 3.44,
                    'q4r4' => 3.17,
                    'q4r5' => 3.33,
                    'q4r6' => 3.14,
                    'q4r7' => 3.08,
                ],
                'qsectorr9' => [
                    'q4r1' => 2.80,
                    'q4r2' => 3.21,
                    'q4r3' => 3.32,
                    'q4r4' => 3.35,
                    'q4r5' => 3.42,
                    'q4r6' => 2.76,
                    'q4r7' => 2.85,
                ],
            ],
            'q5' => [
                'qsectorr1' => [
                    '1' => '0.0%',
                    '2' => '1.5%',
                    '3' => '27.7%',
                    '4' => '67.7%',
                    '5' => '3.1%',
                ],
                'qsectorr2' => [
                    '1' => '0.0%',
                    '2' => '0.0%',
                    '3' => '11.5%',
                    '4' => '73.1%',
                    '5' => '14.1%',
                ],
                'qsectorr3' => [
                    '1' => '0.0%',
                    '2' => '1.3%',
                    '3' => '11.7%',
                    '4' => '76.6%',
                    '5' => '10.4%',
                ],
                'qsectorr4' => [
                    '1' => '0.0%',
                    '2' => '3.6%',
                    '3' => '33.3%',
                    '4' => '58.3%',
                    '5' => '3.6%',
                ],
                'qsectorr5' => [
                    '1' => '0.0%',
                    '2' => '2.2%',
                    '3' => '14.6%',
                    '4' => '66.3%',
                    '5' => '14.6%',
                ],
                'qsectorr6' => [
                    '1' => '0.0%',
                    '2' => '6.0%',
                    '3' => '9.6%',
                    '4' => '73.5%',
                    '5' => '10.8%',
                ],
                'qsectorr7' => [
                    '1' => '0.0%',
                    '2' => '7.4%',
                    '3' => '3.7%',
                    '4' => '85.2%',
                    '5' => '3.7%',
                ],
                'qsectorr8' => [
                    '1' => '1.5%',
                    '2' => '1.5%',
                    '3' => '24.2%',
                    '4' => '53.0%',
                    '5' => '18.2%',
                ],
                'qsectorr9' => [
                    '1' => '0.0%',
                    '2' => '4.2%',
                    '3' => '19.7%',
                    '4' => '66.2%',
                    '5' => '9.9%',
                ],
            ],
            'q6a' => [
                'qsectorr1' => [
                    'q6ar1' => 4.77,
                    'q6ar2' => 3.75,
                    'q6ar3' => 2.94,
                ],
                'qsectorr2' => [
                    'q6ar1' => 9.85,
                    'q6ar2' => 8.54,
                    'q6ar3' => 10.79,
                ],
                'qsectorr3' => [
                    'q6ar1' => 7.31,
                    'q6ar2' => 7.56,
                    'q6ar3' => 5.33,
                ],
                'qsectorr4' => [
                    'q6ar1' => 4.79,
                    'q6ar2' => 4.61,
                    'q6ar3' => 4.38,
                ],
                'qsectorr5' => [
                    'q6ar1' => 7.14,
                    'q6ar2' => 7.07,
                    'q6ar3' => 7.00,
                ],
                'qsectorr6' => [
                    'q6ar1' => 7.46,
                    'q6ar2' => 7.43,
                    'q6ar3' => 5.00,
                ],
                'qsectorr7' => [
                    'q6ar1' => 7.24,
                    'q6ar2' => 6.65,
                    'q6ar3' => 6.10,
                ],
                'qsectorr8' => [
                    'q6ar1' => 5.96,
                    'q6ar2' => 8.09,
                    'q6ar3' => 5.27,
                ],
                'qsectorr9' => [
                    'q6ar1' => 6.13,
                    'q6ar2' => 5.47,
                    'q6ar3' => 4.57,
                ],
            ],
            'q7' => [
                'qsectorr1' => [
                    'q7r1' => 3.14,
                    'q7r2' => 3.02,
                    'q7r3' => 3.28,
                    'q7r4' => 2.85,
                    'q7r5' => 3.00,
                ],
                'qsectorr2' => [
                    'q7r1' => 3.40,
                    'q7r2' => 3.69,
                    'q7r3' => 3.63,
                    'q7r4' => 3.04,
                    'q7r5' => 3.46,
                ],
                'qsectorr3' => [
                    'q7r1' => 3.39,
                    'q7r2' => 3.64,
                    'q7r3' => 3.52,
                    'q7r4' => 3.01,
                    'q7r5' => 3.38,
                ],
                'qsectorr4' => [
                    'q7r1' => 3.12,
                    'q7r2' => 3.36,
                    'q7r3' => 3.43,
                    'q7r4' => 3.12,
                    'q7r5' => 3.08,
                ],
                'qsectorr5' => [
                    'q7r1' => 3.15,
                    'q7r2' => 3.46,
                    'q7r3' => 3.29,
                    'q7r4' => 3.04,
                    'q7r5' => 3.02,
                ],
                'qsectorr6' => [
                    'q7r1' => 3.28,
                    'q7r2' => 3.53,
                    'q7r3' => 3.63,
                    'q7r4' => 3.11,
                    'q7r5' => 3.36,
                ],
                'qsectorr7' => [
                    'q7r1' => 3.89,
                    'q7r2' => 3.81,
                    'q7r3' => 3.78,
                    'q7r4' => 3.04,
                    'q7r5' => 3.41,
                ],
                'qsectorr8' => [
                    'q7r1' => 3.50,
                    'q7r2' => 3.41,
                    'q7r3' => 3.59,
                    'q7r4' => 3.06,
                    'q7r5' => 3.05,
                ],
                'qsectorr9' => [
                    'q7r1' => 3.23,
                    'q7r2' => 3.34,
                    'q7r3' => 3.42,
                    'q7r4' => 3.04,
                    'q7r5' => 3.10,
                ],
            ],
            'q8' => [
                'qsectorr1' => [
                    'q8r1' => 8,
                    'q8r2' => 5,
                    'q8r3' => 2,
                    'q8r4' => 11,
                    'q8r5' => 11,
                    'q8r6' => 11,
                    'q8r7' => 11,
                    'q8r8' => 11,
                    'q8r9' => 11,
                    'q8r10' => 4,
                    'q8r11' => 7,
                    'q8r12' => 10,
                    'q8r13' => 1,
                    'q8r14' => 6,
                    'q8r15' => 8,
                    'q8r16' => 2,
                    'q8r17' => 11,
                    'q8r18' => 11,
                    'q8r19' => 11,
                    'q8r20' => 11,
                    'q8r21' => 11,
                    'q8r22' => 11,
                    'q8r23' => 11,
                    'q8r24' => 11,
                    'q8r25' => 11,
                    'q8r26' => 11,
                    'q8r27' => 11,
                    'q8r28' => 11,
                    'q8r29' => 11,
                    'q8r30' => 11,
                    'q8r31' => 11,
                    'q8r32' => 11,
                    'q8r33' => 11,
                    'q8r34' => 11,
                    'q8r35' => 11,
                ],
                'qsectorr2' => [
                    'q8r1' => 5,
                    'q8r2' => 7,
                    'q8r3' => 8,
                    'q8r4' => 4,
                    'q8r5' => 9,
                    'q8r6' => 10,
                    'q8r7' => 6,
                    'q8r8' => 2,
                    'q8r9' => 1,
                    'q8r10' => 10,
                    'q8r11' => 10,
                    'q8r12' => 10,
                    'q8r13' => 10,
                    'q8r14' => 10,
                    'q8r15' => 10,
                    'q8r16' => 10,
                    'q8r17' => 10,
                    'q8r18' => 10,
                    'q8r19' => 2,
                    'q8r20' => 10,
                    'q8r21' => 10,
                    'q8r22' => 10,
                    'q8r23' => 10,
                    'q8r24' => 10,
                    'q8r25' => 10,
                    'q8r26' => 10,
                    'q8r27' => 10,
                    'q8r28' => 10,
                    'q8r29' => 10,
                    'q8r30' => 10,
                    'q8r31' => 10,
                    'q8r32' => 10,
                    'q8r33' => 10,
                    'q8r34' => 10,
                    'q8r35' => 10,
                ],
                'qsectorr3' => [
                    'q8r1' => 3,
                    'q8r2' => 10,
                    'q8r3' => 8,
                    'q8r4' => 7,
                    'q8r5' => 11,
                    'q8r6' => 5,
                    'q8r7' => 8,
                    'q8r8' => 1,
                    'q8r9' => 1,
                    'q8r10' => 12,
                    'q8r11' => 12,
                    'q8r12' => 12,
                    'q8r13' => 12,
                    'q8r14' => 12,
                    'q8r15' => 12,
                    'q8r16' => 12,
                    'q8r17' => 6,
                    'q8r18' => 4,
                    'q8r19' => 12,
                    'q8r20' => 12,
                    'q8r21' => 12,
                    'q8r22' => 12,
                    'q8r23' => 12,
                    'q8r24' => 12,
                    'q8r25' => 12,
                    'q8r26' => 12,
                    'q8r27' => 12,
                    'q8r28' => 12,
                    'q8r29' => 12,
                    'q8r30' => 12,
                    'q8r31' => 12,
                    'q8r32' => 12,
                    'q8r33' => 12,
                    'q8r34' => 12,
                    'q8r35' => 12,
                ],
                'qsectorr4' => [
                    'q8r1' => 3,
                    'q8r2' => 1,
                    'q8r3' => 7,
                    'q8r4' => 9,
                    'q8r5' => 11,
                    'q8r6' => 11,
                    'q8r7' => 10,
                    'q8r8' => 11,
                    'q8r9' => 6,
                    'q8r10' => 11,
                    'q8r11' => 11,
                    'q8r12' => 11,
                    'q8r13' => 11,
                    'q8r14' => 11,
                    'q8r15' => 11,
                    'q8r16' => 11,
                    'q8r17' => 11,
                    'q8r18' => 11,
                    'q8r19' => 11,
                    'q8r20' => 2,
                    'q8r21' => 5,
                    'q8r22' => 4,
                    'q8r23' => 8,
                    'q8r24' => 11,
                    'q8r25' => 11,
                    'q8r26' => 11,
                    'q8r27' => 11,
                    'q8r28' => 11,
                    'q8r29' => 11,
                    'q8r30' => 11,
                    'q8r31' => 11,
                    'q8r32' => 11,
                    'q8r33' => 11,
                    'q8r34' => 11,
                    'q8r35' => 11,
                ],
                'qsectorr5' => [
                    'q8r1' => 10,
                    'q8r2' => 11,
                    'q8r3' => 1,
                    'q8r4' => 6,
                    'q8r5' => 12,
                    'q8r6' => 12,
                    'q8r7' => 12,
                    'q8r8' => 12,
                    'q8r9' => 12,
                    'q8r10' => 9,
                    'q8r11' => 8,
                    'q8r12' => 3,
                    'q8r13' => 12,
                    'q8r14' => 12,
                    'q8r15' => 12,
                    'q8r16' => 12,
                    'q8r17' => 12,
                    'q8r18' => 12,
                    'q8r19' => 12,
                    'q8r20' => 12,
                    'q8r21' => 12,
                    'q8r22' => 12,
                    'q8r23' => 12,
                    'q8r24' => 4,
                    'q8r25' => 5,
                    'q8r26' => 6,
                    'q8r27' => 12,
                    'q8r28' => 12,
                    'q8r29' => 12,
                    'q8r30' => 12,
                    'q8r31' => 12,
                    'q8r32' => 2,
                    'q8r33' => 12,
                    'q8r34' => 12,
                    'q8r35' => 12,
                ],
                'qsectorr6' => [
                    'q8r1' => 11,
                    'q8r2' => 8,
                    'q8r3' => 3,
                    'q8r4' => 4,
                    'q8r5' => 9,
                    'q8r6' => 13,
                    'q8r7' => 13,
                    'q8r8' => 7,
                    'q8r9' => 2,
                    'q8r10' => 10,
                    'q8r11' => 1,
                    'q8r12' => 5,
                    'q8r13' => 13,
                    'q8r14' => 13,
                    'q8r15' => 13,
                    'q8r16' => 13,
                    'q8r17' => 13,
                    'q8r18' => 13,
                    'q8r19' => 13,
                    'q8r20' => 13,
                    'q8r21' => 13,
                    'q8r22' => 13,
                    'q8r23' => 13,
                    'q8r24' => 13,
                    'q8r25' => 13,
                    'q8r26' => 13,
                    'q8r27' => 12,
                    'q8r28' => 6,
                    'q8r29' => 13,
                    'q8r30' => 13,
                    'q8r31' => 13,
                    'q8r32' => 13,
                    'q8r33' => 13,
                    'q8r34' => 13,
                    'q8r35' => 13,
                ],
                'qsectorr7' => [
                    'q8r1' => 8,
                    'q8r2' => 5,
                    'q8r3' => 3,
                    'q8r4' => 2,
                    'q8r5' => 9,
                    'q8r6' => 10,
                    'q8r7' => 10,
                    'q8r8' => 7,
                    'q8r9' => 1,
                    'q8r10' => 10,
                    'q8r11' => 10,
                    'q8r12' => 10,
                    'q8r13' => 10,
                    'q8r14' => 10,
                    'q8r15' => 10,
                    'q8r16' => 10,
                    'q8r17' => 10,
                    'q8r18' => 10,
                    'q8r19' => 10,
                    'q8r20' => 10,
                    'q8r21' => 10,
                    'q8r22' => 10,
                    'q8r23' => 10,
                    'q8r24' => 10,
                    'q8r25' => 10,
                    'q8r26' => 10,
                    'q8r27' => 10,
                    'q8r28' => 10,
                    'q8r29' => 10,
                    'q8r30' => 4,
                    'q8r31' => 6,
                    'q8r32' => 10,
                    'q8r33' => 10,
                    'q8r34' => 10,
                    'q8r35' => 10,
                ],
                'qsectorr8' => [
                    'q8r1' => 7,
                    'q8r2' => 5,
                    'q8r3' => 2,
                    'q8r4' => 4,
                    'q8r5' => 10,
                    'q8r6' => 10,
                    'q8r7' => 10,
                    'q8r8' => 10,
                    'q8r9' => 10,
                    'q8r10' => 2,
                    'q8r11' => 6,
                    'q8r12' => 8,
                    'q8r13' => 10,
                    'q8r14' => 10,
                    'q8r15' => 10,
                    'q8r16' => 10,
                    'q8r17' => 10,
                    'q8r18' => 10,
                    'q8r19' => 10,
                    'q8r20' => 10,
                    'q8r21' => 10,
                    'q8r22' => 10,
                    'q8r23' => 10,
                    'q8r24' => 10,
                    'q8r25' => 10,
                    'q8r26' => 10,
                    'q8r27' => 10,
                    'q8r28' => 10,
                    'q8r29' => 10,
                    'q8r30' => 10,
                    'q8r31' => 10,
                    'q8r32' => 1,
                    'q8r33' => 9,
                    'q8r34' => 10,
                    'q8r35' => 10,
                ],
                'qsectorr9' => [
                    'q8r1' => 6,
                    'q8r2' => 4,
                    'q8r3' => 6,
                    'q8r4' => 12,
                    'q8r5' => 5,
                    'q8r6' => 3,
                    'q8r7' => 15,
                    'q8r8' => 15,
                    'q8r9' => 15,
                    'q8r10' => 8,
                    'q8r11' => 14,
                    'q8r12' => 1,
                    'q8r13' => 15,
                    'q8r14' => 15,
                    'q8r15' => 15,
                    'q8r16' => 15,
                    'q8r17' => 15,
                    'q8r18' => 15,
                    'q8r19' => 15,
                    'q8r20' => 15,
                    'q8r21' => 15,
                    'q8r22' => 15,
                    'q8r23' => 15,
                    'q8r24' => 2,
                    'q8r25' => 9,
                    'q8r26' => 13,
                    'q8r27' => 15,
                    'q8r28' => 15,
                    'q8r29' => 15,
                    'q8r30' => 15,
                    'q8r31' => 15,
                    'q8r32' => 15,
                    'q8r33' => 15,
                    'q8r34' => 11,
                    'q8r35' => 10,
                ],
            ]
        ];
        $industryGraphReference = [
            'q1' => [
                'qsectorr1' => [
                    'q1r1' => [
                        'label' => 'Customer service and support',
                        'value' => 30.8
                    ],
                    'q1r2' => [
                        'label' => 'Engineering',
                        'value' => 26.2
                    ],
                    'q1r3' => [
                        'label' => 'Research and development (R&D)',
                        'value' => 21.5
                    ],
                    'q1r4' => [
                        'label' => 'Product innovation (new business initiatives)',
                        'value' => 27.7
                    ],
                    'q1r5' => [
                        'label' => 'Maintenance and logistics',
                        'value' => 7.7
                    ],
                    'q1r6' => [
                        'label' => 'Marketing',
                        'value' => 38.5
                    ],
                    'q1r7' => [
                        'label' => 'Finance',
                        'value' => 21.5
                    ],
                    'q1r8' => [
                        'label' => 'HR and legal',
                        'value' => 12.3
                    ],
                    'q1r9' => [
                        'label' => 'Sales',
                        'value' => 30.8
                    ],
                    'q1r10' => [
                        'label' => 'Product management',
                        'value' => 29.2
                    ],
                    'q1r11' => [
                        'label' => 'Governance, risk, and compliance',
                        'value' => 16.9
                    ],
                    'q1r12' => [
                        'label' => 'IT and data operations',
                        'value' => 15.4
                    ],
                    'q1r13' => [
                        'label' => 'Other, please specify',
                        'value' => 0.0
                    ],
                    'q1r14' => [
                        'label' => 'All the above',
                        'value' => 0.0
                    ],
                ],
                'qsectorr2' => [
                    'q1r1' => [
                        'label' => 'Customer service and support',
                        'value' => 34.6
                    ],
                    'q1r2' => [
                        'label' => 'Engineering',
                        'value' => 21.8
                    ],
                    'q1r3' => [
                        'label' => 'Research and development (R&D)',
                        'value' => 28.2
                    ],
                    'q1r4' => [
                        'label' => 'Product innovation (new business initiatives)',
                        'value' => 30.8
                    ],
                    'q1r5' => [
                        'label' => 'Maintenance and logistics',
                        'value' => 25.6
                    ],
                    'q1r6' => [
                        'label' => 'Marketing',
                        'value' => 29.5
                    ],
                    'q1r7' => [
                        'label' => 'Finance',
                        'value' => 24.4
                    ],
                    'q1r8' => [
                        'label' => 'HR and legal',
                        'value' => 17.9
                    ],
                    'q1r9' => [
                        'label' => 'Sales',
                        'value' => 15.4
                    ],
                    'q1r10' => [
                        'label' => 'Product management',
                        'value' => 28.2
                    ],
                    'q1r11' => [
                        'label' => 'Governance, risk, and compliance',
                        'value' => 15.4
                    ],
                    'q1r12' => [
                        'label' => 'IT and data operations',
                        'value' => 61.5
                    ],
                    'q1r13' => [
                        'label' => 'Other, please specify',
                        'value' => 1.3
                    ],
                    'q1r14' => [
                        'label' => 'All the above',
                        'value' => 0.0
                    ],
                ],
                'qsectorr3' => [
                    'q1r1' => [
                        'label' => 'Customer service and support',
                        'value' => 48.1
                    ],
                    'q1r2' => [
                        'label' => 'Engineering',
                        'value' => 14.3
                    ],
                    'q1r3' => [
                        'label' => 'Research and development (R&D)',
                        'value' => 13.0
                    ],
                    'q1r4' => [
                        'label' => 'Product innovation (new business initiatives)',
                        'value' => 15.6
                    ],
                    'q1r5' => [
                        'label' => 'Maintenance and logistics',
                        'value' => 18.2
                    ],
                    'q1r6' => [
                        'label' => 'Marketing',
                        'value' => 32.5
                    ],
                    'q1r7' => [
                        'label' => 'Finance',
                        'value' => 53.2
                    ],
                    'q1r8' => [
                        'label' => 'HR and legal',
                        'value' => 22.1
                    ],
                    'q1r9' => [
                        'label' => 'Sales',
                        'value' => 29.9
                    ],
                    'q1r10' => [
                        'label' => 'Product management',
                        'value' => 32.5
                    ],
                    'q1r11' => [
                        'label' => 'Governance, risk, and compliance',
                        'value' => 29.9
                    ],
                    'q1r12' => [
                        'label' => 'IT and data operations',
                        'value' => 31.2
                    ],
                    'q1r13' => [
                        'label' => 'Other, please specify',
                        'value' => 1.3
                    ],
                    'q1r14' => [
                        'label' => 'All the above',
                        'value' => 0.0
                    ],
                ],
                'qsectorr4' => [
                    'q1r1' => [
                        'label' => 'Customer service and support',
                        'value' => 29.8
                    ],
                    'q1r2' => [
                        'label' => 'Engineering',
                        'value' => 20.2
                    ],
                    'q1r3' => [
                        'label' => 'Research and development (R&D)',
                        'value' => 26.2
                    ],
                    'q1r4' => [
                        'label' => 'Product innovation (new business initiatives)',
                        'value' => 16.7
                    ],
                    'q1r5' => [
                        'label' => 'Maintenance and logistics',
                        'value' => 38.1
                    ],
                    'q1r6' => [
                        'label' => 'Marketing',
                        'value' => 22.6
                    ],
                    'q1r7' => [
                        'label' => 'Finance',
                        'value' => 28.6
                    ],
                    'q1r8' => [
                        'label' => 'HR and legal',
                        'value' => 14.3
                    ],
                    'q1r9' => [
                        'label' => 'Sales',
                        'value' => 27.4
                    ],
                    'q1r10' => [
                        'label' => 'Product management',
                        'value' => 32.1
                    ],
                    'q1r11' => [
                        'label' => 'Governance, risk, and compliance',
                        'value' => 26.2
                    ],
                    'q1r12' => [
                        'label' => 'IT and data operations',
                        'value' => 34.5
                    ],
                    'q1r13' => [
                        'label' => 'Other, please specify',
                        'value' => 0.0
                    ],
                    'q1r14' => [
                        'label' => 'All the above',
                        'value' => 1.2
                    ],
                ],
                'qsectorr5' => [
                    'q1r1' => [
                        'label' => 'Customer service and support',
                        'value' => 29.2
                    ],
                    'q1r2' => [
                        'label' => 'Engineering',
                        'value' => 32.6
                    ],
                    'q1r3' => [
                        'label' => 'Research and development (R&D)',
                        'value' => 27.0
                    ],
                    'q1r4' => [
                        'label' => 'Product innovation (new business initiatives)',
                        'value' => 24.7
                    ],
                    'q1r5' => [
                        'label' => 'Maintenance and logistics',
                        'value' => 37.1
                    ],
                    'q1r6' => [
                        'label' => 'Marketing',
                        'value' => 30.3
                    ],
                    'q1r7' => [
                        'label' => 'Finance',
                        'value' => 18.0
                    ],
                    'q1r8' => [
                        'label' => 'HR and legal',
                        'value' => 14.6
                    ],
                    'q1r9' => [
                        'label' => 'Sales',
                        'value' => 23.6
                    ],
                    'q1r10' => [
                        'label' => 'Product management',
                        'value' => 43.8
                    ],
                    'q1r11' => [
                        'label' => 'Governance, risk, and compliance',
                        'value' => 19.1
                    ],
                    'q1r12' => [
                        'label' => 'IT and data operations',
                        'value' => 33.7
                    ],
                    'q1r13' => [
                        'label' => 'Other, please specify',
                        'value' => 3.4
                    ],
                    'q1r14' => [
                        'label' => 'All the above',
                        'value' => 0.0
                    ],
                ],
                'qsectorr6' => [
                    'q1r1' => [
                        'label' => 'Customer service and support',
                        'value' => 36.1
                    ],
                    'q1r2' => [
                        'label' => 'Engineering',
                        'value' => 14.5
                    ],
                    'q1r3' => [
                        'label' => 'Research and development (R&D)',
                        'value' => 22.9
                    ],
                    'q1r4' => [
                        'label' => 'Product innovation (new business initiatives)',
                        'value' => 24.1
                    ],
                    'q1r5' => [
                        'label' => 'Maintenance and logistics',
                        'value' => 33.7
                    ],
                    'q1r6' => [
                        'label' => 'Marketing',
                        'value' => 54.2
                    ],
                    'q1r7' => [
                        'label' => 'Finance',
                        'value' => 25.3
                    ],
                    'q1r8' => [
                        'label' => 'HR and legal',
                        'value' => 20.5
                    ],
                    'q1r9' => [
                        'label' => 'Sales',
                        'value' => 51.8
                    ],
                    'q1r10' => [
                        'label' => 'Product management',
                        'value' => 39.8
                    ],
                    'q1r11' => [
                        'label' => 'Governance, risk, and compliance',
                        'value' => 19.3
                    ],
                    'q1r12' => [
                        'label' => 'IT and data operations',
                        'value' => 24.1
                    ],
                    'q1r13' => [
                        'label' => 'Other, please specify',
                        'value' => 1.2
                    ],
                    'q1r14' => [
                        'label' => 'All the above',
                        'value' => 0.0
                    ],
                ],
                'qsectorr7' => [
                    'q1r1' => [
                        'label' => 'Customer service and support',
                        'value' => 48.1
                    ],
                    'q1r2' => [
                        'label' => 'Engineering',
                        'value' => 3.7
                    ],
                    'q1r3' => [
                        'label' => 'Research and development (R&D)',
                        'value' => 22.2
                    ],
                    'q1r4' => [
                        'label' => 'Product innovation (new business initiatives)',
                        'value' => 25.9
                    ],
                    'q1r5' => [
                        'label' => 'Maintenance and logistics',
                        'value' => 25.9
                    ],
                    'q1r6' => [
                        'label' => 'Marketing',
                        'value' => 63.0
                    ],
                    'q1r7' => [
                        'label' => 'Finance',
                        'value' => 37.0
                    ],
                    'q1r8' => [
                        'label' => 'HR and legal',
                        'value' => 7.4
                    ],
                    'q1r9' => [
                        'label' => 'Sales',
                        'value' => 14.8
                    ],
                    'q1r10' => [
                        'label' => 'Product management',
                        'value' => 29.6
                    ],
                    'q1r11' => [
                        'label' => 'Governance, risk, and compliance',
                        'value' => 14.8
                    ],
                    'q1r12' => [
                        'label' => 'IT and data operations',
                        'value' => 37.0
                    ],
                    'q1r13' => [
                        'label' => 'Other, please specify',
                        'value' => 0.0
                    ],
                    'q1r14' => [
                        'label' => 'All the above',
                        'value' => 0.0
                    ],
                ],
                'qsectorr8' => [
                    'q1r1' => [
                        'label' => 'Customer service and support',
                        'value' => 27.3
                    ],
                    'q1r2' => [
                        'label' => 'Engineering',
                        'value' => 22.7
                    ],
                    'q1r3' => [
                        'label' => 'Research and development (R&D)',
                        'value' => 22.7
                    ],
                    'q1r4' => [
                        'label' => 'Product innovation (new business initiatives)',
                        'value' => 30.3
                    ],
                    'q1r5' => [
                        'label' => 'Maintenance and logistics',
                        'value' => 39.4
                    ],
                    'q1r6' => [
                        'label' => 'Marketing',
                        'value' => 33.3
                    ],
                    'q1r7' => [
                        'label' => 'Finance',
                        'value' => 27.3
                    ],
                    'q1r8' => [
                        'label' => 'HR and legal',
                        'value' => 16.7
                    ],
                    'q1r9' => [
                        'label' => 'Sales',
                        'value' => 37.9
                    ],
                    'q1r10' => [
                        'label' => 'Product management',
                        'value' => 28.8
                    ],
                    'q1r11' => [
                        'label' => 'Governance, risk, and compliance',
                        'value' => 16.7
                    ],
                    'q1r12' => [
                        'label' => 'IT and data operations',
                        'value' => 34.8
                    ],
                    'q1r13' => [
                        'label' => 'Other, please specify',
                        'value' => 0.0
                    ],
                    'q1r14' => [
                        'label' => 'All the above',
                        'value' => 0.0
                    ],
                ],
                'qsectorr9' => [
                    'q1r1' => [
                        'label' => 'Customer service and support',
                        'value' => 26.8
                    ],
                    'q1r2' => [
                        'label' => 'Engineering',
                        'value' => 26.8
                    ],
                    'q1r3' => [
                        'label' => 'Research and development (R&D)',
                        'value' => 26.8
                    ],
                    'q1r4' => [
                        'label' => 'Product innovation (new business initiatives)',
                        'value' => 21.1
                    ],
                    'q1r5' => [
                        'label' => 'Maintenance and logistics',
                        'value' => 25.4
                    ],
                    'q1r6' => [
                        'label' => 'Marketing',
                        'value' => 22.5
                    ],
                    'q1r7' => [
                        'label' => 'Finance',
                        'value' => 26.8
                    ],
                    'q1r8' => [
                        'label' => 'HR and legal',
                        'value' => 18.3
                    ],
                    'q1r9' => [
                        'label' => 'Sales',
                        'value' => 21.1
                    ],
                    'q1r10' => [
                        'label' => 'Product management',
                        'value' => 21.1
                    ],
                    'q1r11' => [
                        'label' => 'Governance, risk, and compliance',
                        'value' => 18.3
                    ],
                    'q1r12' => [
                        'label' => 'IT and data operations',
                        'value' => 25.4
                    ],
                    'q1r13' => [
                        'label' => 'Other, please specify',
                        'value' => 1.4
                    ],
                    'q1r14' => [
                        'label' => 'All the above',
                        'value' => 0.0
                    ],
                ],
            ],
            'q2' => [
                'qsectorr1' => [
                    'q2r1' => [
                        'label' => 'Better understand customer behavior and expectations',
                        'value' => 0.31
                    ],
                    'q2r2' => [
                        'label' => 'Optimize our pricing strategies and go-to-market programs',
                        'value' => 0.35
                    ],
                    'q2r3' => [
                        'label' => 'Product, services, or program improvement and innovation',
                        'value' => 0.37
                    ],
                    'q2r4' => [
                        'label' => 'Improve our understanding of the market and our competitors',
                        'value' => 0.38
                    ],
                    'q2r5' => [
                        'label' => 'Improve and optimize our business processes and operations',
                        'value' => 0.31
                    ],
                    'q2r6' => [
                        'label' => 'Improve our facilities, and equipment design, maintenance, and utilization',
                        'value' => 0.34
                    ],
                    'q2r7' => [
                        'label' => 'Improve our operational, fraud, and risk management',
                        'value' => 0.25
                    ],
                    'q2r8' => [
                        'label' => 'Implement better regulatory compliance and financial controls',
                        'value' => 0.42
                    ],
                    'q2r9' => [
                        'label' => 'Other, please specify',
                        'value' => 0.00
                    ]
                ],
                'qsectorr2' => [
                    'q2r1' => [
                        'label' => 'Better understand customer behavior and expectations',
                        'value' => 0.49
                    ],
                    'q2r2' => [
                        'label' => 'Optimize our pricing strategies and go-to-market programs',
                        'value' => 0.47
                    ],
                    'q2r3' => [
                        'label' => 'Product, services, or program improvement and innovation',
                        'value' => 0.45
                    ],
                    'q2r4' => [
                        'label' => 'Improve our understanding of the market and our competitors',
                        'value' => 0.42
                    ],
                    'q2r5' => [
                        'label' => 'Improve and optimize our business processes and operations',
                        'value' => 0.44
                    ],
                    'q2r6' => [
                        'label' => 'Improve our facilities, and equipment design, maintenance, and utilization',
                        'value' => 0.40
                    ],
                    'q2r7' => [
                        'label' => 'Improve our operational, fraud, and risk management',
                        'value' => 0.32
                    ],
                    'q2r8' => [
                        'label' => 'Implement better regulatory compliance and financial controls',
                        'value' => 0.36
                    ],
                    'q2r9' => [
                        'label' => 'Other, please specify',
                        'value' => 0.01
                    ]
                ],
                'qsectorr3' => [
                    'q2r1' => [
                        'label' => 'Better understand customer behavior and expectations',
                        'value' => 0.39
                    ],
                    'q2r2' => [
                        'label' => 'Optimize our pricing strategies and go-to-market programs',
                        'value' => 0.42
                    ],
                    'q2r3' => [
                        'label' => 'Product, services, or program improvement and innovation',
                        'value' => 0.43
                    ],
                    'q2r4' => [
                        'label' => 'Improve our understanding of the market and our competitors',
                        'value' => 0.42
                    ],
                    'q2r5' => [
                        'label' => 'Improve and optimize our business processes and operations',
                        'value' => 0.47
                    ],
                    'q2r6' => [
                        'label' => 'Improve our facilities, and equipment design, maintenance, and utilization',
                        'value' => 0.39
                    ],
                    'q2r7' => [
                        'label' => 'Improve our operational, fraud, and risk management',
                        'value' => 0.52
                    ],
                    'q2r8' => [
                        'label' => 'Implement better regulatory compliance and financial controls',
                        'value' => 0.39
                    ],
                    'q2r9' => [
                        'label' => 'Other, please specify',
                        'value' => 0.01
                    ]
                ],
                'qsectorr4' => [
                    'q2r1' => [
                        'label' => 'Better understand customer behavior and expectations',
                        'value' => 0.36
                    ],
                    'q2r2' => [
                        'label' => 'Optimize our pricing strategies and go-to-market programs',
                        'value' => 0.43
                    ],
                    'q2r3' => [
                        'label' => 'Product, services, or program improvement and innovation',
                        'value' => 0.44
                    ],
                    'q2r4' => [
                        'label' => 'Improve our understanding of the market and our competitors',
                        'value' => 0.42
                    ],
                    'q2r5' => [
                        'label' => 'Improve and optimize our business processes and operations',
                        'value' => 0.44
                    ],
                    'q2r6' => [
                        'label' => 'Improve our facilities, and equipment design, maintenance, and utilization',
                        'value' => 0.42
                    ],
                    'q2r7' => [
                        'label' => 'Improve our operational, fraud, and risk management',
                        'value' => 0.37
                    ],
                    'q2r8' => [
                        'label' => 'Implement better regulatory compliance and financial controls',
                        'value' => 0.46
                    ],
                    'q2r9' => [
                        'label' => 'Other, please specify',
                        'value' => 0.00
                    ]
                ],
                'qsectorr5' => [
                    'q2r1' => [
                        'label' => 'Better understand customer behavior and expectations',
                        'value' => 0.39
                    ],
                    'q2r2' => [
                        'label' => 'Optimize our pricing strategies and go-to-market programs',
                        'value' => 0.39
                    ],
                    'q2r3' => [
                        'label' => 'Product, services, or program improvement and innovation',
                        'value' => 0.40
                    ],
                    'q2r4' => [
                        'label' => 'Improve our understanding of the market and our competitors',
                        'value' => 0.48
                    ],
                    'q2r5' => [
                        'label' => 'Improve and optimize our business processes and operations',
                        'value' => 0.47
                    ],
                    'q2r6' => [
                        'label' => 'Improve our facilities, and equipment design, maintenance, and utilization',
                        'value' => 0.48
                    ],
                    'q2r7' => [
                        'label' => 'Improve our operational, fraud, and risk management',
                        'value' => 0.45
                    ],
                    'q2r8' => [
                        'label' => 'Implement better regulatory compliance and financial controls',
                        'value' => 0.30
                    ],
                    'q2r9' => [
                        'label' => 'Other, please specify',
                        'value' => 0.01
                    ]
                ],
                'qsectorr6' => [
                    'q2r1' => [
                        'label' => 'Better understand customer behavior and expectations',
                        'value' => 0.49
                    ],
                    'q2r2' => [
                        'label' => 'Optimize our pricing strategies and go-to-market programs',
                        'value' => 0.47
                    ],
                    'q2r3' => [
                        'label' => 'Product, services, or program improvement and innovation',
                        'value' => 0.41
                    ],
                    'q2r4' => [
                        'label' => 'Improve our understanding of the market and our competitors',
                        'value' => 0.45
                    ],
                    'q2r5' => [
                        'label' => 'Improve and optimize our business processes and operations',
                        'value' => 0.57
                    ],
                    'q2r6' => [
                        'label' => 'Improve our facilities, and equipment design, maintenance, and utilization',
                        'value' => 0.42
                    ],
                    'q2r7' => [
                        'label' => 'Improve our operational, fraud, and risk management',
                        'value' => 0.41
                    ],
                    'q2r8' => [
                        'label' => 'Implement better regulatory compliance and financial controls',
                        'value' => 0.36
                    ],
                    'q2r9' => [
                        'label' => 'Other, please specify',
                        'value' => 0.00
                    ]
                ],
                'qsectorr7' => [
                    'q2r1' => [
                        'label' => 'Better understand customer behavior and expectations',
                        'value' => 0.37
                    ],
                    'q2r2' => [
                        'label' => 'Optimize our pricing strategies and go-to-market programs',
                        'value' => 0.48
                    ],
                    'q2r3' => [
                        'label' => 'Product, services, or program improvement and innovation',
                        'value' => 0.37
                    ],
                    'q2r4' => [
                        'label' => 'Improve our understanding of the market and our competitors',
                        'value' => 0.63
                    ],
                    'q2r5' => [
                        'label' => 'Improve and optimize our business processes and operations',
                        'value' => 0.44
                    ],
                    'q2r6' => [
                        'label' => 'Improve our facilities, and equipment design, maintenance, and utilization',
                        'value' => 0.30
                    ],
                    'q2r7' => [
                        'label' => 'Improve our operational, fraud, and risk management',
                        'value' => 0.41
                    ],
                    'q2r8' => [
                        'label' => 'Implement better regulatory compliance and financial controls',
                        'value' => 0.44
                    ],
                    'q2r9' => [
                        'label' => 'Other, please specify',
                        'value' => 0.00
                    ]
                ],
                'qsectorr8' => [
                    'q2r1' => [
                        'label' => 'Better understand customer behavior and expectations',
                        'value' => 0.39
                    ],
                    'q2r2' => [
                        'label' => 'Optimize our pricing strategies and go-to-market programs',
                        'value' => 0.41
                    ],
                    'q2r3' => [
                        'label' => 'Product, services, or program improvement and innovation',
                        'value' => 0.41
                    ],
                    'q2r4' => [
                        'label' => 'Improve our understanding of the market and our competitors',
                        'value' => 0.48
                    ],
                    'q2r5' => [
                        'label' => 'Improve and optimize our business processes and operations',
                        'value' => 0.44
                    ],
                    'q2r6' => [
                        'label' => 'Improve our facilities, and equipment design, maintenance, and utilization',
                        'value' => 0.29
                    ],
                    'q2r7' => [
                        'label' => 'Improve our operational, fraud, and risk management',
                        'value' => 0.39
                    ],
                    'q2r8' => [
                        'label' => 'Implement better regulatory compliance and financial controls',
                        'value' => 0.39
                    ],
                    'q2r9' => [
                        'label' => 'Other, please specify',
                        'value' => 0.00
                    ]
                ],
                'qsectorr9' => [
                    'q2r1' => [
                        'label' => 'Better understand customer behavior and expectations',
                        'value' => 0.31
                    ],
                    'q2r2' => [
                        'label' => 'Optimize our pricing strategies and go-to-market programs',
                        'value' => 0.38
                    ],
                    'q2r3' => [
                        'label' => 'Product, services, or program improvement and innovation',
                        'value' => 0.48
                    ],
                    'q2r4' => [
                        'label' => 'Improve our understanding of the market and our competitors',
                        'value' => 0.32
                    ],
                    'q2r5' => [
                        'label' => 'Improve and optimize our business processes and operations',
                        'value' => 0.41
                    ],
                    'q2r6' => [
                        'label' => 'Improve our facilities, and equipment design, maintenance, and utilization',
                        'value' => 0.31
                    ],
                    'q2r7' => [
                        'label' => 'Improve our operational, fraud, and risk management',
                        'value' => 0.31
                    ],
                    'q2r8' => [
                        'label' => 'Implement better regulatory compliance and financial controls',
                        'value' => 0.39
                    ],
                    'q2r9' => [
                        'label' => 'Other, please specify',
                        'value' => 0.00
                    ]
                ],
            ],
            'q4' => [
                'qsectorr1' => [
                    'q4r1' => 2.60,
                    'q4r2' => 2.98,
                    'q4r3' => 3.11,
                    'q4r4' => 3.11,
                    'q4r5' => 3.23,
                    'q4r6' => 2.77,
                    'q4r7' => 3.06,
                ],
                'qsectorr2' => [
                    'q4r1' => 2.71,
                    'q4r2' => 3.18,
                    'q4r3' => 3.83,
                    'q4r4' => 3.31,
                    'q4r5' => 3.58,
                    'q4r6' => 3.22,
                    'q4r7' => 3.28,
                ],
                'qsectorr3' => [
                    'q4r1' => 2.94,
                    'q4r2' => 3.17,
                    'q4r3' => 3.65,
                    'q4r4' => 3.21,
                    'q4r5' => 3.65,
                    'q4r6' => 2.87,
                    'q4r7' => 3.23,
                ],
                'qsectorr4' => [
                    'q4r1' => 2.63,
                    'q4r2' => 3.07,
                    'q4r3' => 3.31,
                    'q4r4' => 3.08,
                    'q4r5' => 3.27,
                    'q4r6' => 2.76,
                    'q4r7' => 3.01,
                ],
                'qsectorr5' => [
                    'q4r1' => 3.00,
                    'q4r2' => 3.20,
                    'q4r3' => 3.43,
                    'q4r4' => 3.31,
                    'q4r5' => 3.30,
                    'q4r6' => 3.03,
                    'q4r7' => 3.03,
                ],
                'qsectorr6' => [
                    'q4r1' => 2.82,
                    'q4r2' => 3.27,
                    'q4r3' => 3.64,
                    'q4r4' => 3.11,
                    'q4r5' => 3.55,
                    'q4r6' => 3.33,
                    'q4r7' => 3.11,
                ],
                'qsectorr7' => [
                    'q4r1' => 2.78,
                    'q4r2' => 3.67,
                    'q4r3' => 4.15,
                    'q4r4' => 3.26,
                    'q4r5' => 3.78,
                    'q4r6' => 3.07,
                    'q4r7' => 3.07,
                ],
                'qsectorr8' => [
                    'q4r1' => 2.94,
                    'q4r2' => 3.14,
                    'q4r3' => 3.44,
                    'q4r4' => 3.17,
                    'q4r5' => 3.33,
                    'q4r6' => 3.14,
                    'q4r7' => 3.08,
                ],
                'qsectorr9' => [
                    'q4r1' => 2.80,
                    'q4r2' => 3.21,
                    'q4r3' => 3.32,
                    'q4r4' => 3.35,
                    'q4r5' => 3.42,
                    'q4r6' => 2.76,
                    'q4r7' => 2.85,
                ],
            ],
            'q5' => [
                'qsectorr1' => [
                    '1' => '0.0%',
                    '2' => '1.5%',
                    '3' => '27.7%',
                    '4' => '67.7%',
                    '5' => '3.1%',
                ],
                'qsectorr2' => [
                    '1' => '0.0%',
                    '2' => '0.0%',
                    '3' => '11.5%',
                    '4' => '73.1%',
                    '5' => '14.1%',
                ],
                'qsectorr3' => [
                    '1' => '0.0%',
                    '2' => '1.3%',
                    '3' => '11.7%',
                    '4' => '76.6%',
                    '5' => '10.4%',
                ],
                'qsectorr4' => [
                    '1' => '0.0%',
                    '2' => '3.6%',
                    '3' => '33.3%',
                    '4' => '58.3%',
                    '5' => '3.6%',
                ],
                'qsectorr5' => [
                    '1' => '0.0%',
                    '2' => '2.2%',
                    '3' => '14.6%',
                    '4' => '66.3%',
                    '5' => '14.6%',
                ],
                'qsectorr6' => [
                    '1' => '0.0%',
                    '2' => '6.0%',
                    '3' => '9.6%',
                    '4' => '73.5%',
                    '5' => '10.8%',
                ],
                'qsectorr7' => [
                    '1' => '0.0%',
                    '2' => '7.4%',
                    '3' => '3.7%',
                    '4' => '85.2%',
                    '5' => '3.7%',
                ],
                'qsectorr8' => [
                    '1' => '1.5%',
                    '2' => '1.5%',
                    '3' => '24.2%',
                    '4' => '53.0%',
                    '5' => '18.2%',
                ],
                'qsectorr9' => [
                    '1' => '0.0%',
                    '2' => '4.2%',
                    '3' => '19.7%',
                    '4' => '66.2%',
                    '5' => '9.9%',
                ],
            ],
            'q6a' => [
                'qsectorr1' => [
                    'q6ar1' => 4.77,
                    'q6ar2' => 3.75,
                    'q6ar3' => 2.94,
                ],
                'qsectorr2' => [
                    'q6ar1' => 9.85,
                    'q6ar2' => 8.54,
                    'q6ar3' => 10.79,
                ],
                'qsectorr3' => [
                    'q6ar1' => 7.31,
                    'q6ar2' => 7.56,
                    'q6ar3' => 5.33,
                ],
                'qsectorr4' => [
                    'q6ar1' => 4.79,
                    'q6ar2' => 4.61,
                    'q6ar3' => 4.38,
                ],
                'qsectorr5' => [
                    'q6ar1' => 7.14,
                    'q6ar2' => 7.07,
                    'q6ar3' => 7.00,
                ],
                'qsectorr6' => [
                    'q6ar1' => 7.46,
                    'q6ar2' => 7.43,
                    'q6ar3' => 5.00,
                ],
                'qsectorr7' => [
                    'q6ar1' => 7.24,
                    'q6ar2' => 6.65,
                    'q6ar3' => 6.10,
                ],
                'qsectorr8' => [
                    'q6ar1' => 5.96,
                    'q6ar2' => 8.09,
                    'q6ar3' => 5.27,
                ],
                'qsectorr9' => [
                    'q6ar1' => 6.13,
                    'q6ar2' => 5.47,
                    'q6ar3' => 4.57,
                ],
            ],
            'q7' => [
                'qsectorr1' => [
                    'q7r1' => 3.14,
                    'q7r2' => 3.02,
                    'q7r3' => 3.28,
                    'q7r4' => 2.85,
                    'q7r5' => 3.00,
                ],
                'qsectorr2' => [
                    'q7r1' => 3.40,
                    'q7r2' => 3.69,
                    'q7r3' => 3.63,
                    'q7r4' => 3.04,
                    'q7r5' => 3.46,
                ],
                'qsectorr3' => [
                    'q7r1' => 3.39,
                    'q7r2' => 3.64,
                    'q7r3' => 3.52,
                    'q7r4' => 3.01,
                    'q7r5' => 3.38,
                ],
                'qsectorr4' => [
                    'q7r1' => 3.12,
                    'q7r2' => 3.36,
                    'q7r3' => 3.43,
                    'q7r4' => 3.12,
                    'q7r5' => 3.08,
                ],
                'qsectorr5' => [
                    'q7r1' => 3.15,
                    'q7r2' => 3.46,
                    'q7r3' => 3.29,
                    'q7r4' => 3.04,
                    'q7r5' => 3.02,
                ],
                'qsectorr6' => [
                    'q7r1' => 3.28,
                    'q7r2' => 3.53,
                    'q7r3' => 3.63,
                    'q7r4' => 3.11,
                    'q7r5' => 3.36,
                ],
                'qsectorr7' => [
                    'q7r1' => 3.89,
                    'q7r2' => 3.81,
                    'q7r3' => 3.78,
                    'q7r4' => 3.04,
                    'q7r5' => 3.41,
                ],
                'qsectorr8' => [
                    'q7r1' => 3.50,
                    'q7r2' => 3.41,
                    'q7r3' => 3.59,
                    'q7r4' => 3.06,
                    'q7r5' => 3.05,
                ],
                'qsectorr9' => [
                    'q7r1' => 3.23,
                    'q7r2' => 3.34,
                    'q7r3' => 3.42,
                    'q7r4' => 3.04,
                    'q7r5' => 3.10,
                ],
            ],
            'q8' => [
                'qsectorr1' => [
                    'q8r1' => 8,
                    'q8r2' => 5,
                    'q8r3' => 2,
                    'q8r4' => 11,
                    'q8r5' => 11,
                    'q8r6' => 11,
                    'q8r7' => 11,
                    'q8r8' => 11,
                    'q8r9' => 11,
                    'q8r10' => 4,
                    'q8r11' => 7,
                    'q8r12' => 10,
                    'q8r13' => 1,
                    'q8r14' => 6,
                    'q8r15' => 8,
                    'q8r16' => 2,
                    'q8r17' => 11,
                    'q8r18' => 11,
                    'q8r19' => 11,
                    'q8r20' => 11,
                    'q8r21' => 11,
                    'q8r22' => 11,
                    'q8r23' => 11,
                    'q8r24' => 11,
                    'q8r25' => 11,
                    'q8r26' => 11,
                    'q8r27' => 11,
                    'q8r28' => 11,
                    'q8r29' => 11,
                    'q8r30' => 11,
                    'q8r31' => 11,
                    'q8r32' => 11,
                    'q8r33' => 11,
                    'q8r34' => 11,
                    'q8r35' => 11,
                ],
                'qsectorr2' => [
                    'q8r1' => 5,
                    'q8r2' => 7,
                    'q8r3' => 8,
                    'q8r4' => 4,
                    'q8r5' => 9,
                    'q8r6' => 10,
                    'q8r7' => 6,
                    'q8r8' => 2,
                    'q8r9' => 1,
                    'q8r10' => 10,
                    'q8r11' => 10,
                    'q8r12' => 10,
                    'q8r13' => 10,
                    'q8r14' => 10,
                    'q8r15' => 10,
                    'q8r16' => 10,
                    'q8r17' => 10,
                    'q8r18' => 10,
                    'q8r19' => 2,
                    'q8r20' => 10,
                    'q8r21' => 10,
                    'q8r22' => 10,
                    'q8r23' => 10,
                    'q8r24' => 10,
                    'q8r25' => 10,
                    'q8r26' => 10,
                    'q8r27' => 10,
                    'q8r28' => 10,
                    'q8r29' => 10,
                    'q8r30' => 10,
                    'q8r31' => 10,
                    'q8r32' => 10,
                    'q8r33' => 10,
                    'q8r34' => 10,
                    'q8r35' => 10,
                ],
                'qsectorr3' => [
                    'q8r1' => 3,
                    'q8r2' => 10,
                    'q8r3' => 8,
                    'q8r4' => 7,
                    'q8r5' => 11,
                    'q8r6' => 5,
                    'q8r7' => 8,
                    'q8r8' => 1,
                    'q8r9' => 1,
                    'q8r10' => 12,
                    'q8r11' => 12,
                    'q8r12' => 12,
                    'q8r13' => 12,
                    'q8r14' => 12,
                    'q8r15' => 12,
                    'q8r16' => 12,
                    'q8r17' => 6,
                    'q8r18' => 4,
                    'q8r19' => 12,
                    'q8r20' => 12,
                    'q8r21' => 12,
                    'q8r22' => 12,
                    'q8r23' => 12,
                    'q8r24' => 12,
                    'q8r25' => 12,
                    'q8r26' => 12,
                    'q8r27' => 12,
                    'q8r28' => 12,
                    'q8r29' => 12,
                    'q8r30' => 12,
                    'q8r31' => 12,
                    'q8r32' => 12,
                    'q8r33' => 12,
                    'q8r34' => 12,
                    'q8r35' => 12,
                ],
                'qsectorr4' => [
                    'q8r1' => 3,
                    'q8r2' => 1,
                    'q8r3' => 7,
                    'q8r4' => 9,
                    'q8r5' => 11,
                    'q8r6' => 11,
                    'q8r7' => 10,
                    'q8r8' => 11,
                    'q8r9' => 6,
                    'q8r10' => 11,
                    'q8r11' => 11,
                    'q8r12' => 11,
                    'q8r13' => 11,
                    'q8r14' => 11,
                    'q8r15' => 11,
                    'q8r16' => 11,
                    'q8r17' => 11,
                    'q8r18' => 11,
                    'q8r19' => 11,
                    'q8r20' => 2,
                    'q8r21' => 5,
                    'q8r22' => 4,
                    'q8r23' => 8,
                    'q8r24' => 11,
                    'q8r25' => 11,
                    'q8r26' => 11,
                    'q8r27' => 11,
                    'q8r28' => 11,
                    'q8r29' => 11,
                    'q8r30' => 11,
                    'q8r31' => 11,
                    'q8r32' => 11,
                    'q8r33' => 11,
                    'q8r34' => 11,
                    'q8r35' => 11,
                ],
                'qsectorr5' => [
                    'q8r1' => 10,
                    'q8r2' => 11,
                    'q8r3' => 1,
                    'q8r4' => 6,
                    'q8r5' => 12,
                    'q8r6' => 12,
                    'q8r7' => 12,
                    'q8r8' => 12,
                    'q8r9' => 12,
                    'q8r10' => 9,
                    'q8r11' => 8,
                    'q8r12' => 3,
                    'q8r13' => 12,
                    'q8r14' => 12,
                    'q8r15' => 12,
                    'q8r16' => 12,
                    'q8r17' => 12,
                    'q8r18' => 12,
                    'q8r19' => 12,
                    'q8r20' => 12,
                    'q8r21' => 12,
                    'q8r22' => 12,
                    'q8r23' => 12,
                    'q8r24' => 4,
                    'q8r25' => 5,
                    'q8r26' => 6,
                    'q8r27' => 12,
                    'q8r28' => 12,
                    'q8r29' => 12,
                    'q8r30' => 12,
                    'q8r31' => 12,
                    'q8r32' => 2,
                    'q8r33' => 12,
                    'q8r34' => 12,
                    'q8r35' => 12,
                ],
                'qsectorr6' => [
                    'q8r1' => 11,
                    'q8r2' => 8,
                    'q8r3' => 3,
                    'q8r4' => 4,
                    'q8r5' => 9,
                    'q8r6' => 13,
                    'q8r7' => 13,
                    'q8r8' => 7,
                    'q8r9' => 2,
                    'q8r10' => 10,
                    'q8r11' => 1,
                    'q8r12' => 5,
                    'q8r13' => 13,
                    'q8r14' => 13,
                    'q8r15' => 13,
                    'q8r16' => 13,
                    'q8r17' => 13,
                    'q8r18' => 13,
                    'q8r19' => 13,
                    'q8r20' => 13,
                    'q8r21' => 13,
                    'q8r22' => 13,
                    'q8r23' => 13,
                    'q8r24' => 13,
                    'q8r25' => 13,
                    'q8r26' => 13,
                    'q8r27' => 12,
                    'q8r28' => 6,
                    'q8r29' => 13,
                    'q8r30' => 13,
                    'q8r31' => 13,
                    'q8r32' => 13,
                    'q8r33' => 13,
                    'q8r34' => 13,
                    'q8r35' => 13,
                ],
                'qsectorr7' => [
                    'q8r1' => 8,
                    'q8r2' => 5,
                    'q8r3' => 3,
                    'q8r4' => 2,
                    'q8r5' => 9,
                    'q8r6' => 10,
                    'q8r7' => 10,
                    'q8r8' => 7,
                    'q8r9' => 1,
                    'q8r10' => 10,
                    'q8r11' => 10,
                    'q8r12' => 10,
                    'q8r13' => 10,
                    'q8r14' => 10,
                    'q8r15' => 10,
                    'q8r16' => 10,
                    'q8r17' => 10,
                    'q8r18' => 10,
                    'q8r19' => 10,
                    'q8r20' => 10,
                    'q8r21' => 10,
                    'q8r22' => 10,
                    'q8r23' => 10,
                    'q8r24' => 10,
                    'q8r25' => 10,
                    'q8r26' => 10,
                    'q8r27' => 10,
                    'q8r28' => 10,
                    'q8r29' => 10,
                    'q8r30' => 4,
                    'q8r31' => 6,
                    'q8r32' => 10,
                    'q8r33' => 10,
                    'q8r34' => 10,
                    'q8r35' => 10,
                ],
                'qsectorr8' => [
                    'q8r1' => 7,
                    'q8r2' => 5,
                    'q8r3' => 2,
                    'q8r4' => 4,
                    'q8r5' => 10,
                    'q8r6' => 10,
                    'q8r7' => 10,
                    'q8r8' => 10,
                    'q8r9' => 10,
                    'q8r10' => 2,
                    'q8r11' => 6,
                    'q8r12' => 8,
                    'q8r13' => 10,
                    'q8r14' => 10,
                    'q8r15' => 10,
                    'q8r16' => 10,
                    'q8r17' => 10,
                    'q8r18' => 10,
                    'q8r19' => 10,
                    'q8r20' => 10,
                    'q8r21' => 10,
                    'q8r22' => 10,
                    'q8r23' => 10,
                    'q8r24' => 10,
                    'q8r25' => 10,
                    'q8r26' => 10,
                    'q8r27' => 10,
                    'q8r28' => 10,
                    'q8r29' => 10,
                    'q8r30' => 10,
                    'q8r31' => 10,
                    'q8r32' => 1,
                    'q8r33' => 9,
                    'q8r34' => 10,
                    'q8r35' => 10,
                ],
                'qsectorr9' => [
                    'q8r1' => 6,
                    'q8r2' => 4,
                    'q8r3' => 6,
                    'q8r4' => 12,
                    'q8r5' => 5,
                    'q8r6' => 3,
                    'q8r7' => 15,
                    'q8r8' => 15,
                    'q8r9' => 15,
                    'q8r10' => 8,
                    'q8r11' => 14,
                    'q8r12' => 1,
                    'q8r13' => 15,
                    'q8r14' => 15,
                    'q8r15' => 15,
                    'q8r16' => 15,
                    'q8r17' => 15,
                    'q8r18' => 15,
                    'q8r19' => 15,
                    'q8r20' => 15,
                    'q8r21' => 15,
                    'q8r22' => 15,
                    'q8r23' => 15,
                    'q8r24' => 2,
                    'q8r25' => 9,
                    'q8r26' => 13,
                    'q8r27' => 15,
                    'q8r28' => 15,
                    'q8r29' => 15,
                    'q8r30' => 15,
                    'q8r31' => 15,
                    'q8r32' => 15,
                    'q8r33' => 15,
                    'q8r34' => 11,
                    'q8r35' => 10,
                ],
            ]
        ];

        $sizeReference = [
            'q1' => [
                'qsizer1' => [
                    'q1r1' => 5,
                    'q1r2' => 7,
                    'q1r3' => 11,
                    'q1r4' => 7,
                    'q1r5' => 6,
                    'q1r6' => 1,
                    'q1r7' => 9,
                    'q1r8' => 12,
                    'q1r9' => 4,
                    'q1r10' => 3,
                    'q1r11' => 10,
                    'q1r12' => 2,
                ],
                'qsizer2' => [
                    'q1r1' => 1,
                    'q1r2' => 8,
                    'q1r3' => 7,
                    'q1r4' => 10,
                    'q1r5' => 6,
                    'q1r6' => 2,
                    'q1r7' => 9,
                    'q1r8' => 11,
                    'q1r9' => 4,
                    'q1r10' => 5,
                    'q1r11' => 12,
                    'q1r12' => 3,
                ],
                'qsizer3' => [
                    'q1r1' => 2,
                    'q1r2' => 8,
                    'q1r3' => 10,
                    'q1r4' => 9,
                    'q1r5' => 7,
                    'q1r6' => 1,
                    'q1r7' => 6,
                    'q1r8' => 10,
                    'q1r9' => 5,
                    'q1r10' => 4,
                    'q1r11' => 12,
                    'q1r12' => 3,
                ],
                'qsizer4' => [
                    'q1r1' => 1,
                    'q1r2' => 11,
                    'q1r3' => 7,
                    'q1r4' => 8,
                    'q1r5' => 3,
                    'q1r6' => 6,
                    'q1r7' => 4,
                    'q1r8' => 12,
                    'q1r9' => 9,
                    'q1r10' => 2,
                    'q1r11' => 9,
                    'q1r12' => 4,
                ],
            ],
            'q2' => [
                'qsizer1' => [
                    'q2r1' => 6,
                    'q2r2' => 7,
                    'q2r3' => 4,
                    'q2r4' => 3,
                    'q2r5' => 1,
                    'q2r6' => 1,
                    'q2r7' => 8,
                    'q2r8' => 5,
                ],
                'qsizer2' => [
                    'q2r1' => 6,
                    'q2r2' => 3,
                    'q2r3' => 2,
                    'q2r4' => 3,
                    'q2r5' => 1,
                    'q2r6' => 8,
                    'q2r7' => 5,
                    'q2r8' => 7,
                ],
                'qsizer3' => [
                    'q2r1' => 2,
                    'q2r2' => 2,
                    'q2r3' => 8,
                    'q2r4' => 4,
                    'q2r5' => 7,
                    'q2r6' => 1,
                    'q2r7' => 6,
                    'q2r8' => 4,
                ],
                'qsizer4' => [
                    'q2r1' => 5,
                    'q2r2' => 4,
                    'q2r3' => 3,
                    'q2r4' => 2,
                    'q2r5' => 1,
                    'q2r6' => 8,
                    'q2r7' => 7,
                    'q2r8' => 6,
                ],
            ],
            'q4' => [
                'qsizer1' => [
                    'q4r1' => 2.95,
                    'q4r2' => 3.03,
                    'q4r3' => 3.09,
                    'q4r4' => 3.07,
                    'q4r5' => 3.15,
                    'q4r6' => 2.82,
                    'q4r7' => 2.94,
                ],
                'qsizer2' => [
                    'q4r1' => 2.77,
                    'q4r2' => 3.06,
                    'q4r3' => 3.26,
                    'q4r4' => 3.26,
                    'q4r5' => 3.45,
                    'q4r6' => 3.04,
                    'q4r7' => 3.06,
                ],
                'qsizer3' => [
                    'q4r1' => 2.77,
                    'q4r2' => 3.23,
                    'q4r3' => 3.67,
                    'q4r4' => 3.30,
                    'q4r5' => 3.46,
                    'q4r6' => 3.05,
                    'q4r7' => 3.21,
                ],
                'qsizer4' => [
                    'q4r1' => 2.71,
                    'q4r2' => 3.41,
                    'q4r3' => 3.88,
                    'q4r4' => 3.21,
                    'q4r5' => 3.68,
                    'q4r6' => 3.07,
                    'q4r7' => 3.12,
                ],
            ],
            'q5' => [
                'qsizer1' => [
                    'q5r1' => '0.0%',
                    'q5r2' => '4.1%',
                    'q5r3' => '25.7%',
                    'q5r4' => '60.1%',
                    'q5r5' => '8.8%',
                ],
                'qsizer2' => [
                    'q5r1' => '0.6%',
                    'q5r2' => '5.0%',
                    'q5r3' => '30.7%',
                    'q5r4' => '55.3%',
                    'q5r5' => '7.3%',
                ],
                'qsizer3' => [
                    'q5r1' => '0.0%',
                    'q5r2' => '1.7%',
                    'q5r3' => '10.6%',
                    'q5r4' => '79.3%',
                    'q5r5' => '8.4%',
                ],
                'qsizer4' => [
                    'q5r1' => '0.0%',
                    'q5r2' => '0.5%',
                    'q5r3' => '5.2%',
                    'q5r4' => '78.9%',
                    'q5r5' => '14.9%',
                ],
            ],
            'q6a' => [
                'qsizer1' => [
                    'q6ar1' => 6.83,
                    'q6ar2' => 6.98,
                    'q6ar3' => 7.37,
                ],
                'qsizer2' => [
                    'q6ar1' => 5.50,
                    'q6ar2' => 5.27,
                    'q6ar3' => 4.63,
                ],
                'qsizer3' => [
                    'q6ar1' => 6.97,
                    'q6ar2' => 6.89,
                    'q6ar3' => 5.09,
                ],
                'qsizer4' => [
                    'q6ar1' => 7.32,
                    'q6ar2' => 6.85,
                    'q6ar3' => 5.75,
                ],
            ],
            'q7' => [
                'qsizer1' => [
                    'q7r1' => 3.03,
                    'q7r2' => 3.18,
                    'q7r3' => 3.28,
                    'q7r4' => 2.97,
                    'q7r5' => 2.93,
                ],
                'qsizer2' => [
                    'q7r1' => 3.24,
                    'q7r2' => 3.25,
                    'q7r3' => 3.52,
                    'q7r4' => 3.09,
                    'q7r5' => 3.17,
                ],
                'qsizer3' => [
                    'q7r1' => 3.37,
                    'q7r2' => 3.58,
                    'q7r3' => 3.48,
                    'q7r4' => 3.08,
                    'q7r5' => 3.32,
                ],
                'qsizer4' => [
                    'q7r1' => 3.51,
                    'q7r2' => 3.81,
                    'q7r3' => 3.66,
                    'q7r4' => 3.05,
                    'q7r5' => 3.33,
                ],
            ],
            'q8' => [
                'qsizer1' => [
                    'q8r1' => 28,
                    'q8r2' => 10,
                    'q8r3' => 12,
                    'q8r4' => 15,
                    'q8r5' => 30,
                    'q8r6' => 18,
                    'q8r7' => 21,
                    'q8r8' => 23,
                    'q8r9' => 6,
                    'q8r10' => 13,
                    'q8r11' => 27,
                    'q8r12' => 19,
                    'q8r13' => 25,
                    'q8r14' => 14,
                    'q8r15' => 31,
                    'q8r16' => 20,
                    'q8r17' => 9,
                    'q8r18' => 25,
                    'q8r19' => 31,
                    'q8r20' => 4,
                    'q8r21' => 5,
                    'q8r22' => 11,
                    'q8r23' => 16,
                    'q8r24' => 2,
                    'q8r25' => 3,
                    'q8r26' => 7,
                    'q8r27' => 34,
                    'q8r28' => 7,
                    'q8r29' => 22,
                    'q8r30' => 35,
                    'q8r31' => 31,
                    'q8r32' => 1,
                    'q8r33' => 17,
                    'q8r34' => 24,
                    'q8r35' => 29,
                ],
                'qsizer2' => [
                    'q8r1' => 17,
                    'q8r2' => 9,
                    'q8r3' => 14,
                    'q8r4' => 21,
                    'q8r5' => 29,
                    'q8r6' => 20,
                    'q8r7' => 24,
                    'q8r8' => 18,
                    'q8r9' => 27,
                    'q8r10' => 13,
                    'q8r11' => 19,
                    'q8r12' => 12,
                    'q8r13' => 4,
                    'q8r14' => 22,
                    'q8r15' => 15,
                    'q8r16' => 15,
                    'q8r17' => 28,
                    'q8r18' => 26,
                    'q8r19' => 22,
                    'q8r20' => 10,
                    'q8r21' => 33,
                    'q8r22' => 10,
                    'q8r23' => 25,
                    'q8r24' => 1,
                    'q8r25' => 31,
                    'q8r26' => 5,
                    'q8r27' => 2,
                    'q8r28' => 7,
                    'q8r29' => 8,
                    'q8r30' => 35,
                    'q8r31' => 34,
                    'q8r32' => 3,
                    'q8r33' => 32,
                    'q8r34' => 30,
                    'q8r35' => 6,
                ],
                'qsizer3' => [
                    'q8r1' => 22,
                    'q8r2' => 28,
                    'q8r3' => 16,
                    'q8r4' => 15,
                    'q8r5' => 35,
                    'q8r6' => 21,
                    'q8r7' => 31,
                    'q8r8' => 18,
                    'q8r9' => 7,
                    'q8r10' => 23,
                    'q8r11' => 11,
                    'q8r12' => 14,
                    'q8r13' => 1,
                    'q8r14' => 12,
                    'q8r15' => 24,
                    'q8r16' => 2,
                    'q8r17' => 29,
                    'q8r18' => 33,
                    'q8r19' => 18,
                    'q8r20' => 25,
                    'q8r21' => 17,
                    'q8r22' => 3,
                    'q8r23' => 25,
                    'q8r24' => 30,
                    'q8r25' => 32,
                    'q8r26' => 9,
                    'q8r27' => 33,
                    'q8r28' => 5,
                    'q8r29' => 4,
                    'q8r30' => 13,
                    'q8r31' => 6,
                    'q8r32' => 27,
                    'q8r33' => 10,
                    'q8r34' => 7,
                    'q8r35' => 18,
                ],
                'qsizer4' => [
                    'q8r1' => 13,
                    'q8r2' => 22,
                    'q8r3' => 12,
                    'q8r4' => 20,
                    'q8r5' => 32,
                    'q8r6' => 24,
                    'q8r7' => 26,
                    'q8r8' => 19,
                    'q8r9' => 18,
                    'q8r10' => 14,
                    'q8r11' => 14,
                    'q8r12' => 16,
                    'q8r13' => 35,
                    'q8r14' => 2,
                    'q8r15' => 1,
                    'q8r16' => 28,
                    'q8r17' => 34,
                    'q8r18' => 9,
                    'q8r19' => 3,
                    'q8r20' => 11,
                    'q8r21' => 5,
                    'q8r22' => 33,
                    'q8r23' => 25,
                    'q8r24' => 9,
                    'q8r25' => 4,
                    'q8r26' => 30,
                    'q8r27' => 21,
                    'q8r28' => 23,
                    'q8r29' => 28,
                    'q8r30' => 7,
                    'q8r31' => 26,
                    'q8r32' => 8,
                    'q8r33' => 31,
                    'q8r34' => 17,
                    'q8r35' => 6,
                ],
            ]
        ];
        $sizeGraphReference = [
            'q1' => [
                'qsizer1' => [
                    'q1r1' => [
                        'label' => 'Customer service and support',
                        'value' => 26.4
                    ],
                    'q1r2' => [
                        'label' => 'Engineering',
                        'value' => 24.3
                    ],
                    'q1r3' => [
                        'label' => 'Research and development (R&D)',
                        'value' => 17.6
                    ],
                    'q1r4' => [
                        'label' => 'Product innovation (new business initiatives)',
                        'value' => 24.3
                    ],
                    'q1r5' => [
                        'label' => 'Maintenance and logistics',
                        'value' => 25.7
                    ],
                    'q1r6' => [
                        'label' => 'Marketing',
                        'value' => 34.5
                    ],
                    'q1r7' => [
                        'label' => 'Finance',
                        'value' => 23.0
                    ],
                    'q1r8' => [
                        'label' => 'HR and legal',
                        'value' => 12.8
                    ],
                    'q1r9' => [
                        'label' => 'Sales',
                        'value' => 31.8
                    ],
                    'q1r10' => [
                        'label' => 'Product management',
                        'value' => 33.1
                    ],
                    'q1r11' => [
                        'label' => 'Governance, risk, and compliance',
                        'value' => 21.6
                    ],
                    'q1r12' => [
                        'label' => 'IT and data operations',
                        'value' => 33.8
                    ],
                    'q1r13' => [
                        'label' => 'Other, please specify',
                        'value' => 2.0
                    ],
                    'q1r14' => [
                        'label' => 'All the above',
                        'value' => 0.0
                    ],
                ],
                'qsizer2' => [
                    'q1r1' => [
                        'label' => 'Customer service and support',
                        'value' => 34.6
                    ],
                    'q1r2' => [
                        'label' => 'Engineering',
                        'value' => 25.7
                    ],
                    'q1r3' => [
                        'label' => 'Research and development (R&D)',
                        'value' => 26.3
                    ],
                    'q1r4' => [
                        'label' => 'Product innovation (new business initiatives)',
                        'value' => 22.9
                    ],
                    'q1r5' => [
                        'label' => 'Maintenance and logistics',
                        'value' => 29.6
                    ],
                    'q1r6' => [
                        'label' => 'Marketing',
                        'value' => 34.1
                    ],
                    'q1r7' => [
                        'label' => 'Finance',
                        'value' => 25.1
                    ],
                    'q1r8' => [
                        'label' => 'HR and legal',
                        'value' => 19.0
                    ],
                    'q1r9' => [
                        'label' => 'Sales',
                        'value' => 30.7
                    ],
                    'q1r10' => [
                        'label' => 'Product management',
                        'value' => 30.2
                    ],
                    'q1r11' => [
                        'label' => 'Governance, risk, and compliance',
                        'value' => 18.4
                    ],
                    'q1r12' => [
                        'label' => 'IT and data operations',
                        'value' => 32.4
                    ],
                    'q1r13' => [
                        'label' => 'Other, please specify',
                        'value' => 1.1
                    ],
                    'q1r14' => [
                        'label' => 'All the above',
                        'value' => 0.0
                    ],
                ],
                'qsizer3' => [
                    'q1r1' => [
                        'label' => 'Customer service and support',
                        'value' => 38.0
                    ],
                    'q1r2' => [
                        'label' => 'Engineering',
                        'value' => 21.8
                    ],
                    'q1r3' => [
                        'label' => 'Research and development (R&D)',
                        'value' => 17.9
                    ],
                    'q1r4' => [
                        'label' => 'Product innovation (new business initiatives)',
                        'value' => 21.2
                    ],
                    'q1r5' => [
                        'label' => 'Maintenance and logistics',
                        'value' => 23.5
                    ],
                    'q1r6' => [
                        'label' => 'Marketing',
                        'value' => 41.3
                    ],
                    'q1r7' => [
                        'label' => 'Finance',
                        'value' => 27.4
                    ],
                    'q1r8' => [
                        'label' => 'HR and legal',
                        'value' => 17.9
                    ],
                    'q1r9' => [
                        'label' => 'Sales',
                        'value' => 29.6
                    ],
                    'q1r10' => [
                        'label' => 'Product management',
                        'value' => 30.2
                    ],
                    'q1r11' => [
                        'label' => 'Governance, risk, and compliance',
                        'value' => 16.8
                    ],
                    'q1r12' => [
                        'label' => 'IT and data operations',
                        'value' => 35.8
                    ],
                    'q1r13' => [
                        'label' => 'Other, please specify',
                        'value' => 0.0
                    ],
                    'q1r14' => [
                        'label' => 'All the above',
                        'value' => 0.0
                    ],
                ],
                'qsizer4' => [
                    'q1r1' => [
                        'label' => 'Customer service and support',
                        'value' => 37.1
                    ],
                    'q1r2' => [
                        'label' => 'Engineering',
                        'value' => 17.0
                    ],
                    'q1r3' => [
                        'label' => 'Research and development (R&D)',
                        'value' => 30.4
                    ],
                    'q1r4' => [
                        'label' => 'Product innovation (new business initiatives)',
                        'value' => 24.2
                    ],
                    'q1r5' => [
                        'label' => 'Maintenance and logistics',
                        'value' => 33.5
                    ],
                    'q1r6' => [
                        'label' => 'Marketing',
                        'value' => 30.9
                    ],
                    'q1r7' => [
                        'label' => 'Finance',
                        'value' => 33.0
                    ],
                    'q1r8' => [
                        'label' => 'HR and legal',
                        'value' => 16.5
                    ],
                    'q1r9' => [
                        'label' => 'Sales',
                        'value' => 20.1
                    ],
                    'q1r10' => [
                        'label' => 'Product management',
                        'value' => 35.1
                    ],
                    'q1r11' => [
                        'label' => 'Governance, risk, and compliance',
                        'value' => 20.1
                    ],
                    'q1r12' => [
                        'label' => 'IT and data operations',
                        'value' => 33.0
                    ],
                    'q1r13' => [
                        'label' => 'Other, please specify',
                        'value' => 1.0
                    ],
                    'q1r14' => [
                        'label' => 'All the above',
                        'value' => 0.5
                    ],
                ],
            ],
            'q2' => [
                'qsizer1' => [
                    'q2r1' => [
                        'label' => 'Better understand customer behavior and expectations',
                        'value' => 0.36
                    ],
                    'q2r2' => [
                        'label' => 'Optimize our pricing strategies and go-to-market programs',
                        'value' => 0.36
                    ],
                    'q2r3' => [
                        'label' => 'Product, services, or program improvement and innovation',
                        'value' => 0.42
                    ],
                    'q2r4' => [
                        'label' => 'Improve our understanding of the market and our competitors',
                        'value' => 0.43
                    ],
                    'q2r5' => [
                        'label' => 'Improve and optimize our business processes and operations',
                        'value' => 0.45
                    ],
                    'q2r6' => [
                        'label' => 'Improve our facilities, and equipment design, maintenance, and utilization',
                        'value' => 0.45
                    ],
                    'q2r7' => [
                        'label' => 'Improve our operational, fraud, and risk management',
                        'value' => 0.31
                    ],
                    'q2r8' => [
                        'label' => 'Implement better regulatory compliance and financial controls',
                        'value' => 0.38
                    ],
                    'q2r9' => [
                        'label' => 'Other, please specify',
                        'value' => 0.00
                    ]
                ],
                'qsizer2' => [
                    'q2r1' => [
                        'label' => 'Better understand customer behavior and expectations',
                        'value' => 0.37
                    ],
                    'q2r2' => [
                        'label' => 'Optimize our pricing strategies and go-to-market programs',
                        'value' => 0.42
                    ],
                    'q2r3' => [
                        'label' => 'Product, services, or program improvement and innovation',
                        'value' => 0.43
                    ],
                    'q2r4' => [
                        'label' => 'Improve our understanding of the market and our competitors',
                        'value' => 0.42
                    ],
                    'q2r5' => [
                        'label' => 'Improve and optimize our business processes and operations',
                        'value' => 0.46
                    ],
                    'q2r6' => [
                        'label' => 'Improve our facilities, and equipment design, maintenance, and utilization',
                        'value' => 0.33
                    ],
                    'q2r7' => [
                        'label' => 'Improve our operational, fraud, and risk management',
                        'value' => 0.41
                    ],
                    'q2r8' => [
                        'label' => 'Implement better regulatory compliance and financial controls',
                        'value' => 0.34
                    ],
                    'q2r9' => [
                        'label' => 'Other, please specify',
                        'value' => 0.01
                    ]
                ],
                'qsizer3' => [
                    'q2r1' => [
                        'label' => 'Better understand customer behavior and expectations',
                        'value' => 0.41
                    ],
                    'q2r2' => [
                        'label' => 'Optimize our pricing strategies and go-to-market programs',
                        'value' => 0.41
                    ],
                    'q2r3' => [
                        'label' => 'Product, services, or program improvement and innovation',
                        'value' => 0.36
                    ],
                    'q2r4' => [
                        'label' => 'Improve our understanding of the market and our competitors',
                        'value' => 0.41
                    ],
                    'q2r5' => [
                        'label' => 'Improve and optimize our business processes and operations',
                        'value' => 0.38
                    ],
                    'q2r6' => [
                        'label' => 'Improve our facilities, and equipment design, maintenance, and utilization',
                        'value' => 0.42
                    ],
                    'q2r7' => [
                        'label' => 'Improve our operational, fraud, and risk management',
                        'value' => 0.39
                    ],
                    'q2r8' => [
                        'label' => 'Implement better regulatory compliance and financial controls',
                        'value' => 0.41
                    ],
                    'q2r9' => [
                        'label' => 'Other, please specify',
                        'value' => 0.01
                    ]
                ],
                'qsizer4' => [
                    'q2r1' => [
                        'label' => 'Better understand customer behavior and expectations',
                        'value' => 0.41
                    ],
                    'q2r2' => [
                        'label' => 'Optimize our pricing strategies and go-to-market programs',
                        'value' => 0.43
                    ],
                    'q2r3' => [
                        'label' => 'Product, services, or program improvement and innovation',
                        'value' => 0.45
                    ],
                    'q2r4' => [
                        'label' => 'Improve our understanding of the market and our competitors',
                        'value' => 0.46
                    ],
                    'q2r5' => [
                        'label' => 'Improve and optimize our business processes and operations',
                        'value' => 0.48
                    ],
                    'q2r6' => [
                        'label' => 'Improve our facilities, and equipment design, maintenance, and utilization',
                        'value' => 0.37
                    ],
                    'q2r7' => [
                        'label' => 'Improve our operational, fraud, and risk management',
                        'value' => 0.39
                    ],
                    'q2r8' => [
                        'label' => 'Implement better regulatory compliance and financial controls',
                        'value' => 0.41
                    ],
                    'q2r9' => [
                        'label' => 'Other, please specify',
                        'value' => 0.01
                    ]
                ],
            ],
            'q4' => [
                'qsizer1' => [
                    'q4r1' => [
                        'label' => 'Cost reduction',
                        'value' => 2.95
                    ],
                    'q4r2' => [
                        'label' => 'Time efficiency',
                        'value' => 3.03
                    ],
                    'q4r3' => [
                        'label' => 'Product/service quality',
                        'value' => 3.09
                    ],
                    'q4r4' => [
                        'label' => 'Revenue growth',
                        'value' => 3.07
                    ],
                    'q4r5' => [
                        'label' => 'Customer satisfaction',
                        'value' => 3.15
                    ],
                    'q4r6' => [
                        'label' => 'Business model innovation',
                        'value' => 2.82
                    ],
                    'q4r7' => [
                        'label' => 'Increase in the number of NEW products or services launched',
                        'value' => 2.94
                    ]
                ],
                'qsizer2' => [
                    'q4r1' => [
                        'label' => 'Cost reduction',
                        'value' => 2.77
                    ],
                    'q4r2' => [
                        'label' => 'Time efficiency',
                        'value' => 3.06
                    ],
                    'q4r3' => [
                        'label' => 'Product/service quality',
                        'value' => 3.26
                    ],
                    'q4r4' => [
                        'label' => 'Revenue growth',
                        'value' => 3.26
                    ],
                    'q4r5' => [
                        'label' => 'Customer satisfaction',
                        'value' => 3.45
                    ],
                    'q4r6' => [
                        'label' => 'Business model innovation',
                        'value' => 3.04
                    ],
                    'q4r7' => [
                        'label' => 'Increase in the number of NEW products or services launched',
                        'value' => 3.06
                    ]
                ],
                'qsizer3' => [
                    'q4r1' => [
                        'label' => 'Cost reduction',
                        'value' => 2.77
                    ],
                    'q4r2' => [
                        'label' => 'Time efficiency',
                        'value' => 3.23
                    ],
                    'q4r3' => [
                        'label' => 'Product/service quality',
                        'value' => 3.67
                    ],
                    'q4r4' => [
                        'label' => 'Revenue growth',
                        'value' => 3.30
                    ],
                    'q4r5' => [
                        'label' => 'Customer satisfaction',
                        'value' => 3.46
                    ],
                    'q4r6' => [
                        'label' => 'Business model innovation',
                        'value' => 3.05
                    ],
                    'q4r7' => [
                        'label' => 'Increase in the number of NEW products or services launched',
                        'value' => 3.21
                    ]
                ],
                'qsizer4' => [
                    'q4r1' => [
                        'label' => 'Cost reduction',
                        'value' => 2.71
                    ],
                    'q4r2' => [
                        'label' => 'Time efficiency',
                        'value' => 3.41
                    ],
                    'q4r3' => [
                        'label' => 'Product/service quality',
                        'value' => 3.88
                    ],
                    'q4r4' => [
                        'label' => 'Revenue growth',
                        'value' => 3.21
                    ],
                    'q4r5' => [
                        'label' => 'Customer satisfaction',
                        'value' => 3.68
                    ],
                    'q4r6' => [
                        'label' => 'Business model innovation',
                        'value' => 3.07
                    ],
                    'q4r7' => [
                        'label' => 'Increase in the number of NEW products or services launched',
                        'value' => 3.12
                    ]
                ],
            ],
            'q5' => [
                'qsizer1' => [
                    'q5r1' => '0.0%',
                    'q5r2' => '4.1%',
                    'q5r3' => '25.7%',
                    'q5r4' => '60.1%',
                    'q5r5' => '8.8%',
                ],
                'qsizer2' => [
                    'q5r1' => '0.6%',
                    'q5r2' => '5.0%',
                    'q5r3' => '30.7%',
                    'q5r4' => '55.3%',
                    'q5r5' => '7.3%',
                ],
                'qsizer3' => [
                    'q5r1' => '0.0%',
                    'q5r2' => '1.7%',
                    'q5r3' => '10.6%',
                    'q5r4' => '79.3%',
                    'q5r5' => '8.4%',
                ],
                'qsizer4' => [
                    'q5r1' => '0.0%',
                    'q5r2' => '0.5%',
                    'q5r3' => '5.2%',
                    'q5r4' => '78.9%',
                    'q5r5' => '14.9%',
                ],
            ],
            'q6a' => [
                'qsizer1' => [
                    'q6ar1' => 6.83,
                    'q6ar2' => 6.98,
                    'q6ar3' => 7.37,
                ],
                'qsizer2' => [
                    'q6ar1' => 5.50,
                    'q6ar2' => 5.27,
                    'q6ar3' => 4.63,
                ],
                'qsizer3' => [
                    'q6ar1' => 6.97,
                    'q6ar2' => 6.89,
                    'q6ar3' => 5.09,
                ],
                'qsizer4' => [
                    'q6ar1' => 7.32,
                    'q6ar2' => 6.85,
                    'q6ar3' => 5.75,
                ],
            ],
            'q7' => [
                'qsizer1' => [
                    'q7r1' => 3.03,
                    'q7r2' => 3.18,
                    'q7r3' => 3.28,
                    'q7r4' => 2.97,
                    'q7r5' => 2.93,
                ],
                'qsizer2' => [
                    'q7r1' => 3.24,
                    'q7r2' => 3.25,
                    'q7r3' => 3.52,
                    'q7r4' => 3.09,
                    'q7r5' => 3.17,
                ],
                'qsizer3' => [
                    'q7r1' => 3.37,
                    'q7r2' => 3.58,
                    'q7r3' => 3.48,
                    'q7r4' => 3.08,
                    'q7r5' => 3.32,
                ],
                'qsizer4' => [
                    'q7r1' => 3.51,
                    'q7r2' => 3.81,
                    'q7r3' => 3.66,
                    'q7r4' => 3.05,
                    'q7r5' => 3.33,
                ],
            ],
            'q8' => [
                'qsizer1' => [
                    'q8r1' => 28,
                    'q8r2' => 10,
                    'q8r3' => 12,
                    'q8r4' => 15,
                    'q8r5' => 30,
                    'q8r6' => 18,
                    'q8r7' => 21,
                    'q8r8' => 23,
                    'q8r9' => 6,
                    'q8r10' => 13,
                    'q8r11' => 27,
                    'q8r12' => 19,
                    'q8r13' => 25,
                    'q8r14' => 14,
                    'q8r15' => 31,
                    'q8r16' => 20,
                    'q8r17' => 9,
                    'q8r18' => 25,
                    'q8r19' => 31,
                    'q8r20' => 4,
                    'q8r21' => 5,
                    'q8r22' => 11,
                    'q8r23' => 16,
                    'q8r24' => 2,
                    'q8r25' => 3,
                    'q8r26' => 7,
                    'q8r27' => 34,
                    'q8r28' => 7,
                    'q8r29' => 22,
                    'q8r30' => 35,
                    'q8r31' => 31,
                    'q8r32' => 1,
                    'q8r33' => 17,
                    'q8r34' => 24,
                    'q8r35' => 29,
                ],
                'qsizer2' => [
                    'q8r1' => 17,
                    'q8r2' => 9,
                    'q8r3' => 14,
                    'q8r4' => 21,
                    'q8r5' => 29,
                    'q8r6' => 20,
                    'q8r7' => 24,
                    'q8r8' => 18,
                    'q8r9' => 27,
                    'q8r10' => 13,
                    'q8r11' => 19,
                    'q8r12' => 12,
                    'q8r13' => 4,
                    'q8r14' => 22,
                    'q8r15' => 15,
                    'q8r16' => 15,
                    'q8r17' => 28,
                    'q8r18' => 26,
                    'q8r19' => 22,
                    'q8r20' => 10,
                    'q8r21' => 33,
                    'q8r22' => 10,
                    'q8r23' => 25,
                    'q8r24' => 1,
                    'q8r25' => 31,
                    'q8r26' => 5,
                    'q8r27' => 2,
                    'q8r28' => 7,
                    'q8r29' => 8,
                    'q8r30' => 35,
                    'q8r31' => 34,
                    'q8r32' => 3,
                    'q8r33' => 32,
                    'q8r34' => 30,
                    'q8r35' => 6,
                ],
                'qsizer3' => [
                    'q8r1' => 22,
                    'q8r2' => 28,
                    'q8r3' => 16,
                    'q8r4' => 15,
                    'q8r5' => 35,
                    'q8r6' => 21,
                    'q8r7' => 31,
                    'q8r8' => 18,
                    'q8r9' => 7,
                    'q8r10' => 23,
                    'q8r11' => 11,
                    'q8r12' => 14,
                    'q8r13' => 1,
                    'q8r14' => 12,
                    'q8r15' => 24,
                    'q8r16' => 2,
                    'q8r17' => 29,
                    'q8r18' => 33,
                    'q8r19' => 18,
                    'q8r20' => 25,
                    'q8r21' => 17,
                    'q8r22' => 3,
                    'q8r23' => 25,
                    'q8r24' => 30,
                    'q8r25' => 32,
                    'q8r26' => 9,
                    'q8r27' => 33,
                    'q8r28' => 5,
                    'q8r29' => 4,
                    'q8r30' => 13,
                    'q8r31' => 6,
                    'q8r32' => 27,
                    'q8r33' => 10,
                    'q8r34' => 7,
                    'q8r35' => 18,
                ],
                'qsizer4' => [
                    'q8r1' => 13,
                    'q8r2' => 22,
                    'q8r3' => 12,
                    'q8r4' => 20,
                    'q8r5' => 32,
                    'q8r6' => 24,
                    'q8r7' => 26,
                    'q8r8' => 19,
                    'q8r9' => 18,
                    'q8r10' => 14,
                    'q8r11' => 14,
                    'q8r12' => 16,
                    'q8r13' => 35,
                    'q8r14' => 2,
                    'q8r15' => 1,
                    'q8r16' => 28,
                    'q8r17' => 34,
                    'q8r18' => 9,
                    'q8r19' => 3,
                    'q8r20' => 11,
                    'q8r21' => 5,
                    'q8r22' => 33,
                    'q8r23' => 25,
                    'q8r24' => 9,
                    'q8r25' => 4,
                    'q8r26' => 30,
                    'q8r27' => 21,
                    'q8r28' => 23,
                    'q8r29' => 28,
                    'q8r30' => 7,
                    'q8r31' => 26,
                    'q8r32' => 8,
                    'q8r33' => 31,
                    'q8r34' => 17,
                    'q8r35' => 6,
                ],
            ]
        ];
        $genericReference = [
            'q1' => [
                'q1r1' => 'Including Customer Service among the areas for focus on Big Data indicates a strong customer orientation, rather than a focus on efficiency improvements or cost reduction. Many organisations concentrate their big data efforts on cost reduction and efficiency improvements and have not embraced the opportunity to build new business models through the adoption of Big Data solutions.',
                'q1r2' => 'Big Data Solutions in Engineering tends to focus on cost saving and efficiency improvements - which is where a large share of businesses put their attention. There are significant opportunities to improve efficiency in an organisation and the use of Big Data solutions to address these tends to drive towards a more measured and methodical approach to savings and improvements.',
                'q1r3' => 'Using Big Data solutions in Research and Development presents opportunities to develop new products and identify new business outside of mainstream products and services. This is an early step towards transforming into a fully digital business and this tends to be an option selected by more adventurous businesses.',
                'q1r4' => 'This is a good opportunity to use Big Data solutions to grow business or to identify new business opportunities. Most organistions tend to put this low on their list of priorities as they do not yet fully understand the business transformation opportunity this presents to them. However, this is the future of business so including Product Innovation among the Big Data opportunities is the first step towards fully embracing the digital future for business.',
                'q1r5' => 'Maintenance and Logistics applications of Big Data tend to focus on cost reduction or efficiency improvements. In this area There is opportunity for dynamic improvements in mantenance through the use of remote sensing for machine wear, and predictive analysis of machine failure. Within Logistics the movements of goods and materials also presents significant opportunty for efficiency improvements through the use of Big Data solutions.',
                'q1r6' => 'Including Marketing among the areas of focus for Big Data solutions suggested more attention is paid to either generating new business opportunities, or building existing business with a data oriented approach that builds on efficiencies when addressing these opportunities. Using a data-oriented approach to Marketing can give a more nuanced alignment with customer needs and identifiy some business opportunities for existing products based on specific customer needs and wants.',
                'q1r7' => 'Finance applications of Big Data tend to focus on improvements in efficiency, or on cost reduction options. This is where most businesses currently use their Big Data tools, but it misses the opportunity to transform your business through identifying new business areas, or new customers. There are areas within finance though that can lead to new business development, and these can include a dgree of product innovation, or more focused customer profiling through the analysis of financial measures associated with key customers.',
                'q1r8' => 'Most Big Data imprementations in HR are likely to work towards efficiency improvements and cost reductions rather than to build new business opportunities. However, HR is a significant opportunity for improved efficiency due to the volume of data associated with the function.',
                'q1r9' => 'Big Data solutions for Sales present significant opportunities for new business development and business growth. The behaviour of customers - apparent through the data trails they provide - offer the chance to build new relationships based on customer product and business preferences, as well as customer buying cycles. In addition, customer preferences can drive new product development through the sales cycle, identifying specific customer needs from this data.',
                'q1r10' => 'The use of Big Data to analyse customer needs and drive product management and development is one of the ground-breaking development areas, and presents a huge opportunity to digitally transform business away from conventional Product-Meets-Client-Needs and towards stronger relationships where customer behaviour develops product cycles, pricing, availability, and feature enhancement. ',
                'q1r11' => 'Governance, Risk, and Compliance is an increasingly important area that requires Big Data solutions to address fully. All of these capabilities cut across a wide range of industries and the focus will mostly be on improved efficiences, but also addressing issues that are difficult to work with without the use of a data solution, such as GDPR compliance and management of staff.',
                'q1r12' => 'Big Data is an ideal solution to address IT and Data Operations and will mostly be used for cost reduction and efficiency improvements across the whole IT organisation. ',
            ],
            'q2' => [
                'q2r1' => 'Understanding customer behaviour is a laudable goal for business improvement, although it is only in the mid-range of overal responses. A focus on understanding customer behaviour using Big Data solutions means greater attention can be paid to digitally transforming the business, with customer needs and wishes able to drive product and process development. However, this is lower down on the priority list for most organisations.',
                'q2r2' => 'While Optimising Pricing Strategies and Go-to-market programs enables a better focus on efficiency improvements, it does not contribute a lot to digitally transforming business. Much of the benefit of this optimisation will be in improving efficiencies and cost reduction within the organisation. There is some scope for new business development though as this can help understand ideal pricing for products and services over time, and identify segments - for example small businesses, or professional services organisations - that might pay above average prices for benefits such as early availability of product.',
                'q2r3' => 'Using Big Data Solutions as a driver for Digital Transformation will involve setting product and service improvements as business goals - based on the premise that what gets measured gets done. New product and service developments that are driven by customer needs and behaviour are the key to future business success and Big Data solutions are the ideal methods because this builds on measured customer behaviour, not on intuition-based management decisions about product direction. Data-based decision making is the best approach to arriving at products that clients want and need.',
                'q2r4' => 'Improving market understanding is the second most popular business goals across all businesses, and this contributes notably to helping develop products and services that customers need. Taking a data-oriented approach to understanding markets in this way is an excellent use of the value found in customer databases: this can help transform organisations from standard product-to-client approaches towards a more digitally-oriented business.',
                'q2r5' => 'This is the most popular business goal among survey respondents, but this focuses mostly on cost reduction and efficiency improvements. Most vendors use Big Data solutions for this, rather than looking for Big Data Solutions to transform their business through new business models or product development.',
                'q2r6' => 'Improving facilities is one of the less popular business goals among all survey respondents and relates to efficiency and cost improvements rather than to growing business, transforming business, or generating new business.',
                'q2r7' => 'Some of the early applications of Big data solutions related to understanding and reducing fraud, and also in reducing risk. This mostly came from early adopters of Big Data who were focused on the financial aspects of their business. This has fallen in popularity as a business goal now though, and is the goal least likely to drive adoption of Big Data',
                'q2r8' => 'regulatory compliance and financial control is the second least popular business goal although it has been more popular in the past as organisations began to adopt big data solutions. These are cost saving solutions and as a result have seen previous popularity as organisations initially adopy Big Data solutions primarily for their cost saving capabilities. Looking ahead though, adopting Big Data solutions to grow and develop business is the approached adopted by more forward looking organisations as they seek to transform their business using enhanced digital capabilities.',
            ],
            'q4' => [
                'q4r1' => 'This is the least popular Key Performance Indicator anong all industries, although anecdotal evidence suggested this is one of the key drivers among organisations considering Big Data Solutions. Cost Reduction, together with efficiency improvements, can contribute significantly towards profitability but the biggest value that Big Data solutions can offer is towards transforming businesses to become more digitally focused. This requires more than simply looking using data to delvier new products though, and needs a willingness to transform at the highest level.',
                'q4r2' => 'This is one of the middle-ground Key Performance Indicators, ranked fourth overall across all industries. As with Cost Reduction, anecdotal evidence suggests efficiency is one of the driving factors for implementation of big data solutions and this can contribute substantially to improved performance and profitability.',
                'q4r3' => 'This is the most popular Key Performance Indicator across all industries and a good area to focus. This will contribute towards cost reduction as Big Data Solutions are able to identify potential issues with products early in manufacture, but also get consistent and realistic overall feedback for services as they are delivered in the field. Improvements in existing products and services are more easily identified through manufacturing and client feedback.',
                'q4r4' => 'This is ranked third among performance indicators by all industries and should be one of the key KPI\'s for evaluating business performance. Revenue Growth gives a strong overall view of the impact of adopting Big data Solutions and justifies the the investment. Coupled with Cost Reduction, this can increase profitability in a controlled manner through a focus on client needs and activity as measured through the data they provide via their interations.',
                'q4r5' => 'This contributes to improved profitability and revenue growth as a result of increased engagement with customers. It is the second most popular performance indicator across all industries, which shows its importance when evaluating Big Data Solutions and their impact. With improved customer satisfaction, measured in an objective way through surveys, customer feedback, and better customer engagement, organisations can build stronger relationships and hence use unbiased customer feedback when evaluating new business models and in product development.',
                'q4r6' => 'This is a significant contributor to digital transformation within organisations, and can be enabled through feedback from Big Data solutions. Currently though, this is a key performance indicator for early adopters, as it ranks second to last among the KPIs as rated across all industries. Big data Solutions give notable understanding of the whole business process in a measured and objective way, and organisations need to consider new business models to remain competitive in the medium term future. So this should be a considered performance indicator in all organisations.',
                'q4r7' => 'This is one of the key benefits of adoptinig Big Data Solutions - the ability to identify new products that are customised more to customer needs and include features clients ask for and use. Big Data Solutions can measure utilisation of the product and include client feedback which is then used to develop a wider range of customised, client-specific capabilities for which customers will pay more.',
            ],
            'q5' => 'Most organisations expect increased benefits from their Big Data implementations, with Moderate or High levels of benefits the most likely anticipated outcome. However, you would expect organisations to plan on an increase or there is no purpose for their Big Data investment. Big data solutions should contribute to increased profit, revenue, and reduced cost though because of the improvements in control and efficiency that come from attention to any business area. There is the contribution of the Hawthorn effect too, with any part of an organisation that gets attention generating improvements in the quality or volume of work completed, contributing overall to cost and efficiency improvements. Big Data solutions can only add to control and management of an organisation and any project, however small, will move an organisation down the digital transformation path and into developing fundamental new ways of conducting business.',
            'q6a' => [
                'q6ar1' => 'This is the least popular Key Performance Indicator anong all industries, although anecdotal evidence suggested this is one of the key drivers among organisations considering Big Data Solutions. Cost Reduction, together with efficiency improvements, can contribute significantly towards profitability but the biggest value that Big Data solutions can offer is towards transforming businesses to become more digitally focused. This requires more than simply looking using data to delvier new products though, and needs a willingness to transform at the highest level.',
                'q6ar2' => 'This is one of the middle-ground Key Performance Indicators, ranked fourth overall across all industries. As with Cost Reduction, anecdotal evidence suggests efficiency is one of the driving factors for implementation of big data solutions and this can contribute substantially to improved performance and profitability.',
                'q6ar3' => 'This is the most popular Key Performance Indicator across all industries and a good area to focus. This will contribute towards cost reduction as Big Data Solutions are able to identify potential issues with products early in manufacture, but also get consistent and realistic overall feedback for services as they are delivered in the field. Improvements in existing products and services are more easily identified through manufacturing and client feedback.',                
            ],
            'q7' => [
                'q7r1' => 'Time Efficiency is ranked in the middle in terms of the extent to which Big Data solutions can impact the achivement of the performance indicator - when considering the responses of all organisations. Overall, most organisations expect a little more than a slight increase in ability to achive the KPI. Hwever, improvements in efficiency is one  of the key reasons until now that organisations have considered implementing Big Data solutions. Despite this middle-ranging expectation, Big Data solutions should be considered when implementing changes to improve efficiency in the organisation.',
                'q7r2' => 'This is the second highest in terms of the ability of Big Data solutions to impact the ability to achieve the KPI, with only Customer Satisfaction giving a higher contribtion, when considering the responses of all organisations. Product or service quality can contribute significantly to digital transformation in the organisation, with Big Data solutions used to guide product development along the lines of customer feedback.',
                'q7r3' => 'This performance indicator is ranked the highest across all organisations in terms of the ability for Big Data solutions to help the achievement of the KPI. The average organisation expects close to a moderate increase in the ability to achive the KPI. and customer satisfaction itself. Customer Satisfaction is a key driver towards digital transformation and big data solutions are a sginificant contributor to implementing improved customer satisfaction.',
                'q7r4' => 'While Business Model Innovation is ranked the lowest of the KPI\'s in the ability of Big Data solutions to impact the achivement of the KPI, they still give a slight increase in the ability to achieve the performance indicator. Business Model innovation is one of the biggest outcomes from implementing a Digital Transformation solution, so should be seriously considered as an objective and performance indicator for measuring the impact of implementing a Big Data solution.',
                'q7r5' => 'This is another of the more significant contributing factors towards digital transformation, and should be seriously considered as a key performance indicator for Big Data implementations.  While Big Data solutions only make a slight increase in the KPI, the feedback and understanding gained from analysis of customer activity, and preferences identified in product or service features can make very notable improvements in profitability, revenue, and competitiveness by enabling more customisation of products and services to tie in eisting customers.',                
            ]
        ];

        $client = new \GuzzleHttp\Client([
            'base_uri' => 'https://selfserve.decipherinc.com/api/v1/surveys/selfserve/',
            'headers' => [
                'x-apikey' => 'um2mzvqjs4zjhqn5e9xvp2a6bnybkyq6h01degmgn68qdwkqq4en77vwn0bnxv9v',
            ]
        ]);
        try {
            $answerRequest = $client->request('GET', '21eb/180705/data', [
                'query' => [
                    'format' => 'json',
                    'cond' => 'uuid=="f9z3sduwbdxrbyx4"'
                ]
            ]);
            
            $questionRequest = $client->request('GET', '21eb/180705/datamap', [
                'query' => [
                    'format' => 'json',
                ]
            ]);
        } catch (GuzzleHttp\Exception\RequestException $e) {
            return $e->getMessage();
        }
        $questions = collect(json_decode($questionRequest->getBody(), true))->only('questions')->flatten(1)->filter(function($item){
            return isset($item['variables']) && isset($item['qtitle']);
        })->pluck(['variables'])->flatten(1);
        

        // $questions = collect($jsonQuestions)->only('questions')->flatten(1)->filter(function($item){
        //     return isset($item['variables']) && isset($item['qtitle']);
        // })->pluck(['variables'])->flatten(1);

        //$questions = collect(json_decode(Storage::disk('local')->get('/italyFiles/questions.json'),true));

        $singleQuestions = $questions->mapWithKeys(function($item){
            return [$item['label'] => $item['rowTitle']];
        });
        $singleQuestionsText = $questions->filter(function($item, $key){
            return strpos($item['qlabel'], 's') === false;
        })->mapWithKeys(function($item){
            return [$item['label'] => $item['qtitle']];
        });

        $answer = collect(json_decode($answerRequest->getBody(), true))->first();
        
        //$answer =  collect(json_decode(Storage::disk('local')->get('/italyFiles/answer.json'), true));

        $industry =  collect($answer)->only(array_keys($industryKeys))->filter()->keys()->first();
        $size =  collect($answer)->only(array_keys($sizeKeys))->filter()->keys()->first();
        //graph settings

        $graphSettings = array(
            'back_colour' => '#FFF',
            'stroke_colour' => NULL,
            'back_stroke_width' => 0,
            'back_stroke_colour' => '#EFEFEF',

            'grid_division_h' => 10,
            
            'axis_colour' => '#FFF',
            'axis_text_colour' => '#000',
            'axis_overlap' => 2,
            'axis_font' => 'Open Sans',
            'axis_font_size' => 10,
            'show_grid' => true,
            'show_grid_h' => false,
            'grid_colour' => '#EFEFEF',
            'label_colour' => '#000',
            'pad_right' => 20,
            'pad_left' => 0,
            'minimum_grid_spacing' => 20,
        );


        $q1question = "Put Question here";
        $q1intro = "Intro for question1";
        

        //questionSize1
        $q1Sizeset = $sizeReference['q1'][$size];
        $q1SizeAnswers = collect($answer)->only(array_keys($q1Sizeset))->filter();
        $q1Sizelabels = collect($singleQuestions)->filter(function($item, $key) use($q1SizeAnswers){
            return collect($q1SizeAnswers->keys())->contains($key);                
        });

        //q1SizeGraph
        $colours = [
            '#c6dd64',
        ];
        $q1GraphSizeValues = collect($sizeGraphReference['q1'][$size])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();
        asort($q1GraphSizeValues);
        $q1GraphSizeUserShapes = collect($q1GraphSizeValues)->filter(function($item, $key) use($q1Sizelabels){
            return $q1Sizelabels->contains($key);
        })->map(function($item, $key) use($q1GraphSizeValues){
            return [
                'circle',
                'cx' => 'g'.$item,
                'cy' => 'g'.(collect($q1GraphSizeValues)->keys()->search($key)+0.5),
                'r' => 10,
                'stroke' => '#FFF',
                'stroke-width' => 2,
                'depth' => 'above',
                'fill' => '#842573'
            ];
        });
        $graphSettings['shape'] = $q1GraphSizeUserShapes->values()->toArray();
        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q1GraphSizeValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values($q1GraphSizeValues);

        $q1SizeGraph = $graph->fetch('HorizontalGroupedBarGraph', false);

        //Size band
        $q1Sizeheader = "You selected {$q1SizeAnswers->count()} implementation areas in the {$sizeKeys[$size]} sizeband: {$q1Sizelabels->implodeLast(', ',', and ')} <br/><br/>";
        $q1Sizebody = "";
        $q1Sizelabels->each(function($item, $key) use(&$q1Sizebody, $size, $sizeKeys, $sizeReference, $genericReference){
            if($sizeReference['q1'][$size][$key]<4){
                $q1Sizebody .= "<strong>{$item}</strong> is among the Top 3 implementation areas and is ranked as <strong>{$sizeReference['q1'][$size][$key]}</strong>. This shows your investment choices align with most organisations in {$sizeKeys[$size]} size band, and a suitable area for investment in Big Data Solutions.<br/>";
            }
            if($sizeReference['q1'][$size][$key]>9){
                $q1Sizebody .= "<strong>{$item}</strong> is among the Bottom 3 implementation areas and is ranked as <strong>{$sizeReference['q1'][$size][$key]}</strong>. This suggests your investments differ from most organisations in {$sizeKeys[$size]} size band.<br/>";
            }
            if($sizeReference['q1'][$size][$key]<=9 && $sizeReference['q1'][$size][$key]>=4){
                $q1Sizebody .= "<strong>{$item}</strong> is in the middle set of implementation areas and is ranked as <strong>{$sizeReference['q1'][$size][$key]}</strong>. Your investment criteria for Big Data investment focuses slightly outside mainstream investment areas, but still picks up on those areas with interest from some Big Data users.<br/>";
            }
            $q1Sizebody .= $genericReference['q1'][$key]."<br/><br/>";
        });
        $question1Size = $q1Sizeheader.$q1Sizebody;

        //question1Industry
        $q1Industryset = $industryReference['q1'][$industry];
        $q1IndustryAnswers = collect($answer)->only(array_keys($q1Industryset))->filter();
        $q1Industrylabels = collect($singleQuestions)->filter(function($item, $key) use($q1IndustryAnswers){
            return collect($q1IndustryAnswers->keys())->contains($key);                
        });

        //q1IndustryGraph
        $colours = [
            '#2279BC',
        ];
        $q1GraphIndustryValues = collect($industryGraphReference['q1'][$industry])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();
        asort($q1GraphIndustryValues);
        $graphIndustryUserShapes = collect($q1GraphIndustryValues)->filter(function($item, $key) use($q1Industrylabels){
            return $q1Industrylabels->contains($key);
        })->map(function($item, $key) use($q1GraphIndustryValues){
            return [
                'circle',
                'cx' => 'g'.$item,
                'cy' => 'g'.(collect($q1GraphIndustryValues)->keys()->search($key)+0.5),
                'r' => 10,
                'stroke' => '#FFF',
                'stroke-width' => 2,
                'depth' => 'above',
                'fill' => '#e8ae38'
            ];
        });
        $graphSettings['shape'] = $graphIndustryUserShapes->values()->toArray();
        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q1GraphIndustryValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values($q1GraphIndustryValues);

        $q1IndustryGraph = $graph->fetch('HorizontalGroupedBarGraph', false);

        //Industry
        $q1industryHeader = "You selected {$q1IndustryAnswers->count()} implementation areas in {$industryKeys[$industry]}: {$q1Industrylabels->implodeLast(', ',', and ')}<br/><br/>";
        $q1IndustryBody = "";
        $q1Industrylabels->each(function($item, $key) use(&$q1IndustryBody, $industry, $industryKeys, $industryReference, $genericReference){
            if($industryReference['q1'][$industry][$key]<4){
                $q1IndustryBody .= "<strong>{$item}</strong> is among the Top 3 implementation areas and is ranked as <strong>{$industryReference['q1'][$industry][$key]}</strong>. This shows your investment choices align with most organisations in {$industryKeys[$industry]}, and a suitable area for investment in Big Data Solutions.<br/>";
            }
            if($industryReference['q1'][$industry][$key]>9){
                $q1IndustryBody .= "<strong>{$item}</strong> is among the Bottom 3 implementation areas and is ranked as <strong>{$industryReference['q1'][$industry][$key]}</strong>. This suggests your investments differ from most organisations in {$industryKeys[$industry]}.<br/>";
            }
            if($industryReference['q1'][$industry][$key]<=9 && $industryReference['q1'][$industry][$key]>=4){
                $q1IndustryBody .= "<strong>{$item}</strong> is in the middle set of implementation areas and is ranked as <strong>{$industryReference['q1'][$industry][$key]}</strong>. Your investment criteria for Big Data investment focuses slightly outside mainstream investment areas, but still picks up on those areas with interest from some Big Data users.<br/>";
            }
            $q1IndustryBody .= $genericReference['q1'][$key]."<br/><br/>";
        });
        $question1Industry = $q1industryHeader.$q1IndustryBody;

        $question1 = $q1SizeGraph.$question1Size.$q1IndustryGraph.$question1Industry;

        //question2
        $q2question = "Put Question here";
        $q2intro = "Intro for question2";

        $q2Sizeset = $sizeReference['q2'][$size];
        $q2SizeAnswers = collect($answer)->only(array_keys($q2Sizeset))->filter();
        $q2Sizelabels = collect($singleQuestions)->filter(function($item, $key) use($q2SizeAnswers){
            return collect($q2SizeAnswers->keys())->contains($key);                
        });

        //q2SizeGraph
        $colours = [
            '#c6dd64',
        ];
        $q2GraphSizeValues = collect($sizeGraphReference['q2'][$size])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']*100];
        })->toArray();

        asort($q2GraphSizeValues);

        $q2GraphSizeUserShapes = collect($q2GraphSizeValues)->filter(function($item, $key) use($q2Sizelabels){
            return $q2Sizelabels->contains($key);
        })->map(function($item, $key) use($q2GraphSizeValues){
            return [
                'circle',
                'cx' => 'g'.$item,
                'cy' => 'g'.(collect($q2GraphSizeValues)->keys()->search($key)+0.5),
                'r' => 10,
                'stroke' => '#FFF',
                'stroke-width' => 2,
                'depth' => 'above',
                'fill' => '#842573'
            ];
        });
        $graphSettings['shape'] = $q2GraphSizeUserShapes->values()->toArray();
        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q2GraphSizeValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q2GraphSizeValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        $q2SizeGraph = $graph->fetch('HorizontalGroupedBarGraph', false);

        $q2Sizeheader = "You selected {$q2SizeAnswers->count()} implementation areas in {$sizeKeys[$size]}: {$q2Sizelabels->implodeLast(', ',', and ')}<br/><br/>";

        $q2Sizebody = "";
        $q2Sizelabels->each(function($item, $key) use(&$q2Sizebody, $size, $sizeKeys, $sizeReference, $genericReference){
            if($sizeReference['q2'][$size][$key]<4){
                $q2Sizebody .= "<strong>{$item}</strong> is among the Top 3 implementation areas and is ranked as <strong>{$sizeReference['q2'][$size][$key]}</strong>. This shows your investment choices align with most organisations in {$sizeKeys[$size]}, and a suitable area for investment in Big Data Solutions.<br/>";
            }
            if($sizeReference['q2'][$size][$key]>5){
                $q2Sizebody .= "<strong>{$item}</strong> is among the Bottom 3 implementation areas and is ranked as <strong>{$sizeReference['q2'][$size][$key]}</strong>. This suggests your investments differ from most organisations in {$sizeKeys[$size]}.<br/>";
            }
            if($sizeReference['q2'][$size][$key]<=5 && $sizeReference['q2'][$size][$key]>=4){
                $q2Sizebody .= "<strong>{$item}</strong> is in the middle set of implementation areas and is ranked as <strong>{$sizeReference['q2'][$size][$key]}</strong>. Your investment criteria for Big Data investment focuses slightly outside mainstream investment areas, but still picks up on those areas with interest from some Big Data users.<br/>";
            }
            $q2Sizebody .= $genericReference['q2'][$key]."<br/><br/>";
        });

        $questionSize2 = $q2Sizeheader.$q2Sizebody;

        $q2Industryset = $industryReference['q2'][$industry];
        $q2IndustryAnswers = collect($answer)->only(array_keys($q2Industryset))->filter();
        $q2Industrylabels = collect($singleQuestions)->filter(function($item, $key) use($q2IndustryAnswers){
            return collect($q2IndustryAnswers->keys())->contains($key);                
        });

        //q2IndustryGraph
        $colours = [
            '#2279BC',
        ];
        $q2GraphIndustryValues = collect($industryGraphReference['q2'][$industry])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']*100];
        })->toArray();

        asort($q2GraphIndustryValues);

        $q2GraphIndustryUserShapes = collect($q2GraphIndustryValues)->filter(function($item, $key) use($q2Industrylabels){
            return $q2Industrylabels->contains($key);
        })->map(function($item, $key) use($q2GraphIndustryValues){
            return [
                'circle',
                'cx' => 'g'.$item,
                'cy' => 'g'.(collect($q2GraphIndustryValues)->keys()->search($key)+0.5),
                'r' => 10,
                'stroke' => '#FFF',
                'stroke-width' => 2,
                'depth' => 'above',
                'fill' => '#e8ae38'
            ];
        });
        $graphSettings['shape'] = $q2GraphIndustryUserShapes->values()->toArray();
        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q2GraphIndustryValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q2GraphIndustryValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        $q2IndustryGraph = $graph->fetch('HorizontalGroupedBarGraph', false);

        $q2Industryheader = "You selected {$q2IndustryAnswers->count()} implementation areas in {$industryKeys[$industry]}: {$q2Industrylabels->implodeLast(', ',', and ')}<br/><br/>";

        $q2Industrybody = "";
        $q2Industrylabels->each(function($item, $key) use(&$q2Industrybody, $industry, $industryKeys, $industryReference, $genericReference){
            if($industryReference['q2'][$industry][$key]<4){
                $q2Industrybody .= "<strong>{$item}</strong> is among the Top 3 implementation areas and is ranked as <strong>{$industryReference['q2'][$industry][$key]}</strong>. This shows your investment choices align with most organisations in {$industryKeys[$industry]}, and a suitable area for investment in Big Data Solutions.<br/>";
            }
            if($industryReference['q2'][$industry][$key]>5){
                $q2Industrybody .= "<strong>{$item}</strong> is among the Bottom 3 implementation areas and is ranked as <strong>{$industryReference['q2'][$industry][$key]}</strong>. This suggests your investments differ from most organisations in {$industryKeys[$industry]}.<br/>";
            }
            if($industryReference['q2'][$industry][$key]<=5 && $industryReference['q2'][$industry][$key]>=4){
                $q2Industrybody .= "<strong>{$item}</strong> is in the middle set of implementation areas and is ranked as <strong>{$industryReference['q2'][$industry][$key]}</strong>. Your investment criteria for Big Data investment focuses slightly outside mainstream investment areas, but still picks up on those areas with interest from some Big Data users.<br/>";
            }
            $q2Industrybody .= $genericReference['q2'][$key]."<br/><br/>";
        });

        $questionIndustry2 = $q2Industryheader.$q2Industrybody;

        $question2 = $q2SizeGraph.$questionSize2.$q2IndustryGraph.$questionIndustry2;

        //question4
        
        //$q4question = $singleQuestionsText->get($q4SizeLabels->keys()->first());
        $q4question = "Write question 4";
        $q4intro = "intro fro q4";

        $q4SizeSet = $sizeReference['q4'][$size];
        $q4SizeAnswers = collect($answer)->only(array_keys($q4SizeSet))->filter();
        $q4SizeAnswersSort = $q4SizeAnswers->sort()->reverse()->keys();
        $q4SizeAnswersRank = $this->rankArray($q4SizeAnswers->toArray());
        $q4SizeLabels = collect($singleQuestions)->filter(function($item, $key) use($q4SizeAnswers){
            return collect($q4SizeAnswers->keys())->contains($key);                
        });

        $q4Sizeheader = "You evaluated {$q4SizeAnswers->count()} implementation areas in the {$sizeKeys[$size]} size band: {$q4SizeLabels->implodeLast(', ',', and ')}<br/><br/>";

        //q4SizeGraph
        $colours = [
            '#c6dd64',
        ];
        $q4GraphSizeValues = collect($sizeGraphReference['q4'][$size])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();

        asort($q4GraphSizeValues);

        $q4SizeAnswersLabels = collect($sizeGraphReference['q4'][$size])->mapWithKeys(function($item, $key) use($q4SizeAnswers){
            return [$item['label'] => $q4SizeAnswers->get($key)];
        });

        $q4GraphSizeUserShapes = collect($q4GraphSizeValues)->map(function($item, $key) use($q4SizeAnswersLabels, $q4GraphSizeValues){
            return [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g'.(collect($q4GraphSizeValues)->keys()->search($key)+0.5),
                    'x2' => 'g'.($q4SizeAnswersLabels->get($key)),
                    'y2' => 'g'.(collect($q4GraphSizeValues)->keys()->search($key)+0.5),
                    'stroke-width' => 2,
                    'stroke' => '#842573',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.($q4SizeAnswersLabels->get($key)),
                    'cy' => 'g'.(collect($q4GraphSizeValues)->keys()->search($key)+0.5),
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#842573'
                ],
            ];
        });

        $graphSettings['shape'] = $q4GraphSizeUserShapes->flatten(1)->toArray();
        $graphSettings['grid_division_h'] = 1;
        $graphSettings['axis_max_h'] = 5;
        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q4GraphSizeValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q4GraphSizeValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        $q4SizeGraph = $graph->fetch('HorizontalGroupedBarGraph', false);

        $q4Sizebody = "";
        $q4SizeLabels->each(function($item, $key) use(&$q4Sizebody, $size, $sizeKeys, $sizeReference, $genericReference, $q4SizeAnswers, $q4SizeAnswersSort, $q4SizeAnswersRank){
            $nth = $q4SizeAnswersRank[$key] == 1 ? 'most' : $this->ordinal($q4SizeAnswersRank[$key])." most";
            $q4Sizebody .= "<strong>{$item}</strong> is the <strong>{$nth}</strong> important of your Key Performance Indicators and";
            if($q4SizeAnswers[$key] < $sizeReference['q4'][$size][$key]){
                $q4Sizebody .= " you rated it below the average rating for all organisations in {$sizeKeys[$size]} <strong>({$sizeReference['q4'][$size][$key]})</strong>. This specific investment choice falls a little behind your peers, and you might want to consider increasing its importance within your priorities for Big Data Solutions.";
            }
            if($q4SizeAnswers[$key] > $sizeReference['q4'][$size][$key]){
                $q4Sizebody .= " you rated it the same as the average rating for all organisations in {$sizeKeys[$size]}, and this shows your views on <strong>{$item}</strong> are in line with those of the majority of other organisations.";
            }
            $q4Sizebody .= $genericReference['q4'][$key]."<br/><br/>";
        });

        $questionSize4 = $q4Sizeheader.$q4Sizebody;

        $q4IndustrySet = $industryReference['q4'][$industry];
        $q4IndustryAnswers = collect($answer)->only(array_keys($q4IndustrySet))->filter();
        $q4IndustryAnswersSort = $q4IndustryAnswers->sort()->reverse()->keys();
        $q4IndustryAnswersRank = $this->rankArray($q4IndustryAnswers->toArray());
        $q4IndustryLabels = collect($singleQuestions)->filter(function($item, $key) use($q4IndustryAnswers){
            return collect($q4IndustryAnswers->keys())->contains($key);                
        });

        $q4Industryheader = "You selected {$q4IndustryAnswers->count()} implementation areas in {$industryKeys[$industry]}: {$q4IndustryLabels->implodeLast(', ',', and ')}<br/><br/>";

        //q4IndustryGraph
        $colours = [
            '#c6dd64',
        ];
        $q4GraphSizeValues = collect($industryGraphReference['q4'][$industry])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']*100];
        })->toArray();

        asort($q4GraphSizeValues);

        $q4GraphSizeUserShapes = collect($q4GraphSizeValues)->filter(function($item, $key) use($q4IndustryLabels){
            return $q4IndustryLabels->contains($key);
        })->map(function($item, $key) use($q4GraphSizeValues){
            return [
                'circle',
                'cx' => 'g'.$item,
                'cy' => 'g'.(collect($q4GraphSizeValues)->keys()->search($key)+0.5),
                'r' => 10,
                'stroke' => '#FFF',
                'stroke-width' => 2,
                'depth' => 'above',
                'fill' => '#842573'
            ];
        });
        $graphSettings['shape'] = $q4GraphSizeUserShapes->values()->toArray();
        $graphSettings['grid_division_h'] = 1;
        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q4GraphSizeValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q4GraphSizeValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        $q4IndustryGraph = $graph->fetch('HorizontalGroupedBarGraph', false);

        $q4Industrybody = "";
        $q4IndustryLabels->each(function($item, $key) use(&$q4Industrybody, $industry, $industryKeys, $industryReference, $genericReference, $q4IndustryAnswers, $q4IndustryAnswersSort, $q4IndustryAnswersRank){
            $nth = $q4IndustryAnswersRank[$key] == 1 ? 'most' : $this->ordinal($q4IndustryAnswersRank[$key])." most";
            $q4Industrybody .= "<strong>{$item}</strong> is the <strong>{$nth}</strong> important of your Key Performance Indicators and";
            if($q4IndustryAnswers[$key] < $industryReference['q4'][$industry][$key]){
                $q4Industrybody .= " you rated it below the average rating for all organisations in {$industryKeys[$industry]} <strong>({$industryReference['q4'][$industry][$key]})</strong>. This specific investment choice falls a little behind your peers, and you might want to consider increasing its importance within your priorities for Big Data Solutions.";
            }
            if($q4IndustryAnswers[$key] > $industryReference['q4'][$industry][$key]){
                $q4Industrybody .= " you rated it the same as the average rating for all organisations in {$industryKeys[$industry]}, and this shows your views on <strong>{$item}</strong> are in line with those of the majority of other organisations.";
            }
            $q4Industrybody .= $genericReference['q4'][$key]."<br/><br/>";
        });

        $questionIndustry4 = $q4Industryheader.$q4Industrybody;

        $question4 = "<h2>Q4</h2><br/>".$q4SizeGraph.$questionSize4.$q4IndustryGraph.$questionIndustry4;

        return $question1.$question2.$question4;

        //question5
        $graphSettings['grid_division_h'] = 10;
        $q5set = $industryReference['q5'][$industry];

        $q5Answer = collect($answer)->only('q5')->first();

        $q5body = "";
        
        if($q5Answer == 1){
            $q5body .= "Your expectations from using Big data solutions are considerably below that expected for organisations across all industries, and also for organisations in ";
        }
        if($q5Answer == 2){
            $q5body .= "Your expectations from using Big data solutions are  below that expected for organisations across all industries, and also for organisations in ";
        }
        if($q5Answer == 3){
            $q5body .= "Your expectations from using Big data solutions are a little lower than expected for organisations across all industries, and also for organisations in ";
        }
        if($q5Answer == 4){
            $q5body .= "Your expectations from using Big data solutions are similar to that expected for organisations across all industries, and also for organisations in ";
        }
        if($q5Answer == 5){
            $q5body .= "Your expectations from using Big data solutions are higher than that expected for organisations across all industries, and also for organisations in ";
        }
        $q5body .= "{$industryKeys[$industry]}.<br/>";
        $q5body .= "<strong>{$industryReference['q5'][$industry][$q5Answer]}</strong> of organisations in this industry gave a similar rating.<br/><br/>";

        $q5body .= $genericReference['q5']."<br/><br/>";

        $question5 = $q5body;

        //question6
        $q6aset = $industryReference['q6a'][$industry];
        $q6aAnswers = collect($answer)->only(array_keys($q6aset))->filter();
        $q6aAnswersRank = $this->rankArray($q6aAnswers->toArray());
        $q6alabels = collect($singleQuestions)->filter(function($item, $key) use($q6aAnswers){
            return collect($q6aAnswers->keys())->contains($key);                
        });

        $q6aquestion = $singleQuestionsText->get($q6alabels->keys()->first());
        $q6arankfirst = str_replace(" by", "", $q6alabels->get(collect(array_keys($q6aAnswersRank))->first()));
        $q6aranklast = str_replace(" by", "", $q6alabels->get(collect(array_keys($q6aAnswersRank))->last()));

        $q6aheader = "You expect your biggest gain in <strong>{$q6arankfirst}</strong> and your smallest gain in  <strong>{$q6aranklast}</strong> <br/>";

        $q6abody = "";
        $q6alabels->each(function($item, $key) use(&$q6abody, $industry, $industryKeys, $industryReference, $genericReference, $q6aAnswers){
            $label = trim(str_replace(['Increased','Reduced','by'], ['','',''], $item));
            $q6abody .= "For {$label} ";
            if($q6aAnswers[$key] > (3 * $industryReference['q6a'][$industry][$key])){
                $q6abody .= "your expectations are much higher than the average for {$industryKeys[$industry]}. This could be optimism on your part but you might want to look more carefully at your plans and business model.<br/>";
            }
            if($q6aAnswers[$key] > $industryReference['q6a'][$industry][$key]){
                $q6abody .= "your expectations are higher than the average for {$industryKeys[$industry]}, but not by an overly optimistic amount so you have either better plans or better expectations than your peers in industry.<br/>";
            }
            if($q6aAnswers[$key] == $industryReference['q6a'][$industry][$key]){
                $q6abody .= "your expectations are similar to the average for {$industryKeys[$industry]}.<br/>";
            }
            if($q6aAnswers[$key] < ($industryReference['q6a'][$industry][$key]) / 3){
                $q6abody .= "your expectations are much lower than the average for {$industryKeys[$industry]}. You might want to reconsider your plans and review where you can make improvements in your expectations.<br/>";
            }
            if($q6aAnswers[$key] < $industryReference['q6a'][$industry][$key]){
                $q6abody .= "your expectations are lower than the average for {$industryKeys[$industry]}, but not by a significant amount. You could consider revising your planning, but you expecctations are generally in line with those of others in your industry.<br/>";
            }
        });
        $q6abody .= "<br/>";

        $question6a = $q6aheader.$q6abody;

        //question7
        $q7set = $industryReference['q7'][$industry];
        $q7Answers = collect($answer)->only(array_keys($q7set))->filter();
        $q7labels = collect($singleQuestions)->filter(function($item, $key) use($q7Answers){
            return collect($q7Answers->keys())->contains($key);                
        });

        $q7question = $singleQuestionsText->get($q7labels->keys()->first());

        $q7body = "";
        $q7labels->each(function($item, $key) use(&$q7body, $industry, $industryKeys, $industryReference, $genericReference, $q7Answers){
            $q7body .= "You rated the impact of <strong>{$item}</strong>";
            if($q7Answers->get($key) < $industryReference['q7'][$industry][$key]-1){
                $q7body .= " much lower ";
            }
            if($q7Answers->get($key) == $industryReference['q7'][$industry][$key]){
                $q7body .= " similar to ";
            }
            if($q7Answers->get($key) > $industryReference['q7'][$industry][$key]){
                $q7body .= " higher than ";
            }
            if($q7Answers->get($key) > $industryReference['q7'][$industry][$key]+1){
                $q7body .= " much higher than ";
            }
            $q7body .= " the average rating given by organisations in {$industryKeys[$industry]}.<br/>";
            if($q7Answers->get($key) == 1){
                $q7body .= "It is unusual for Big Data deloyments to result in an negative impact, so it would be worth investigating why you think this is the case. Causes for a negative impact can include changes to scope throughout the deployment and careful project management can reduce unnecessary scope creep.";
            }
            if($q7Answers->get($key) == 2){
                $q7body .= "While you see or anticipate that a big data solution made no change to your achivement of your <strong>{$item}</strong> performance indicator, is it still worth continuing to adopt Big Data solutions because of their future impact in other areas - as most organisations have seen a slight or moderate increase in their KPIs with these solutions";
            }
            if($q7Answers->get($key) == 3){
                $q7body .= "Most organisations anticipate either a slight or moderate increase so your expecations or actual achivement for <strong>{$item}</strong> are consistent with the majority of organisations. ";
            }
            if($q7Answers->get($key) == 4){
                $q7body .= "While most organisations anticipate a slight or moderate Increase, your expectations or achivement for <strong>{$item}</strong> are a little higher than most. This is a realistic outcome and shows the value of implementing a Big Data solution.";
            }
            if($q7Answers->get($key) == 5){
                $q7body .= "Your achivement or expectation of a high increase in your ability to achive your <strong>{$item}</strong> puts you ahead of most organisations, and emphasises the value of implenting a Big Data solution for this KPI";
            }
            $q7body .= $genericReference['q7'][$key]."<br/><br/>";
        });

        $question7 = $q7body;

        //question8
        $q8set = $industryReference['q8'][$industry];
        $q8Answers = collect($answer)->only(array_keys($q8set))->filter();
        $q8labels = collect($singleQuestions)->filter(function($item, $key) use($q8Answers){
            return collect($q8Answers->keys())->contains($key);                
        });

        $q8question = $singleQuestionsText->get($q8labels->keys()->first());
        $q8header = "You selected {$q8Answers->count()}  use cases for planning, evaluating, using, or implementing in {$industryKeys[$industry]}.<br/>";
        $q8AnswersTopTen = $q8Answers->filter(function($item, $key) use($industryReference,$industry){
            return $industryReference['q8'][$industry][$key] > 0 && $industryReference['q8'][$industry][$key] < 11;
        });
        $q8TopTen = $q8labels->only($q8AnswersTopTen->keys()->toArray())->implodeLast(', ',', and ');

        $q8header .= "Of these <strong>{$q8AnswersTopTen->count()}</strong> are in the top 10 use cases adopted in this industry:<br/>";
        $q8header .= "{$q8TopTen}.<br/><br/>";

        if($q8AnswersTopTen->count() < 4){
            $q8header .= "You have few of your use cases in the top 10 for {$industryKeys[$industry]}. Whils this is not a problem you might want to review the {$industryKeys[$industry]} use case list when considering future Big Data projects.";
        }
        if($q8AnswersTopTen->count() < 6){
            $q8header .= "Close to half of the top ten {$industryKeys[$industry]} use cases are included in your list of use cases for your Big Data implementations. This is a reasonable coverage and implies your business needs align reasonably well with others in {$industryKeys[$industry]}.";
        }
        if($q8AnswersTopTen->count() == 10){
            $q8header .= "You include all of the top 10 {$industryKeys[$industry]} use cases in your Big Data implementation, which gives excellent alignment between your business needs and those of your peers.";
        }

        $question8 = $q8header;

        return $question1.$question2.$question4.$question5.$question6a.$question7.$question8;
    }

    private function ordinal($number) {
        $ends = array('th','st','nd','rd','th','th','th','th','th','th');
        if ((($number % 100) >= 11) && (($number%100) <= 13))
            return $number. 'th';
        else
            return $number. $ends[$number % 10];
    }
    private function rankArray($array) {
        arsort($array);
        $rank = [];
        $occurrences = array_count_values($array);
        $i = 0;
        $currRank = 0;
        foreach($array as $key => $value) {
            if( $value != $currRank){
                $i = array_search($key,array_keys($array))+1;
                $currRank = $value;
            }
            $rank[$key] = $i;
        }
        return $rank;
    }
}
