<?php
namespace SCHEER\domain1\Hook;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Persistence\ObjectStorageInterface;

class MyHook
{
    /**
     * @param string $command
     * @param string $table
     * @param string $id
     * @param array $record
     * @param $objectStorage
     * @return void
     */
    public function processDatamap_afterDatabaseOperations(string $command, string $table, string $id, array $record, $objectStorage): void
    {
        if ($table === 'tx_beratungsstellen_domain_model_beratungsstelle') {
            // Prüfen ob plz vorhanden oder verändert
            if (is_array($record) && array_key_exists('plz', $record)) {
//
//
//                $record['plz'] = '50169';
//                $meinePLZ = $record['plz'];
//                // Geokoordinaten
//                // $newGeoCords = GeneralUtility::makeInstance(MeineFancyApi:class)($meinePLZ)->getLatitude();
//
//                // BeratungstellenRepository instanzieren
//                $beratungstellenRepository = GeneralUtility::makeInstance(BeratungstellenRepository:class);
//
//                // herholen meiner beratungstelle aus dem repo
//                $beratungstelle = $beratungstellenRepository->findByUid($id);
//
//                // Die geo cords speichern
//                $beratungstelle->setLatitudeAndLongitude($newGeoCords);
//
//                // Dann mach was damit
//                debug();
//                die;
            }
        }
    }
}
?>