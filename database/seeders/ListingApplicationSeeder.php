<?php

namespace Database\Seeders;

use App\Models\JobListing;
use App\Models\ListingApplication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListingApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = range(2, 17); // IDs dos usuários (2 a 17)
        $jobIds = range(1, 32); // IDs das vagas (1 a 32)

        // Iterar por cada vaga
        foreach ($jobIds as $jobId) {
            // Embaralha os IDs dos usuários para garantir aleatoriedade
            $shuffledUserIds = $userIds;
            shuffle($shuffledUserIds);

            // Define quantos usuários vão se candidatar a essa vaga (entre 2 e 5)
            $applications = rand(10, 16);

            // Seleciona os primeiros $applications usuários embaralhados
            $selectedUsers = array_slice($shuffledUserIds, 0, $applications);

            // Criar aplicações para a vaga atual
            foreach ($selectedUsers as $userId) {
                ListingApplication::create([
                    "user_id" => $userId,
                    "job_listing_id" => $jobId,
                ]);

                // Atualiza o candidate_count da vaga
                $job = JobListing::find($jobId);
                if ($job) {
                    $job->candidate_count++;
                    $job->update();
                }
            }
        }
    }
}
