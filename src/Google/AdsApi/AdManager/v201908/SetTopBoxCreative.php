<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SetTopBoxCreative extends \Google\AdsApi\AdManager\v201908\BaseVideoCreative
{

    /**
     * @var string $externalAssetId
     */
    protected $externalAssetId = null;

    /**
     * @var string $providerId
     */
    protected $providerId = null;

    /**
     * @var string[] $availabilityRegionIds
     */
    protected $availabilityRegionIds = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\DateTime $licenseWindowStartDateTime
     */
    protected $licenseWindowStartDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\DateTime $licenseWindowEndDateTime
     */
    protected $licenseWindowEndDateTime = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201908\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v201908\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201908\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201908\BaseCustomFieldValue[] $customFieldValues
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param int $duration
     * @param boolean $allowDurationOverride
     * @param \Google\AdsApi\AdManager\v201908\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @param int[] $companionCreativeIds
     * @param string $customParameters
     * @param string $skippableAdType
     * @param string $vastPreviewUrl
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param string $externalAssetId
     * @param string $providerId
     * @param string[] $availabilityRegionIds
     * @param \Google\AdsApi\AdManager\v201908\DateTime $licenseWindowStartDateTime
     * @param \Google\AdsApi\AdManager\v201908\DateTime $licenseWindowEndDateTime
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $duration = null, $allowDurationOverride = null, array $trackingUrls = null, array $companionCreativeIds = null, $customParameters = null, $skippableAdType = null, $vastPreviewUrl = null, $sslScanResult = null, $sslManualOverride = null, $externalAssetId = null, $providerId = null, array $availabilityRegionIds = null, $licenseWindowStartDateTime = null, $licenseWindowEndDateTime = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType, $duration, $allowDurationOverride, $trackingUrls, $companionCreativeIds, $customParameters, $skippableAdType, $vastPreviewUrl, $sslScanResult, $sslManualOverride);
      $this->externalAssetId = $externalAssetId;
      $this->providerId = $providerId;
      $this->availabilityRegionIds = $availabilityRegionIds;
      $this->licenseWindowStartDateTime = $licenseWindowStartDateTime;
      $this->licenseWindowEndDateTime = $licenseWindowEndDateTime;
    }

    /**
     * @return string
     */
    public function getExternalAssetId()
    {
      return $this->externalAssetId;
    }

    /**
     * @param string $externalAssetId
     * @return \Google\AdsApi\AdManager\v201908\SetTopBoxCreative
     */
    public function setExternalAssetId($externalAssetId)
    {
      $this->externalAssetId = $externalAssetId;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderId()
    {
      return $this->providerId;
    }

    /**
     * @param string $providerId
     * @return \Google\AdsApi\AdManager\v201908\SetTopBoxCreative
     */
    public function setProviderId($providerId)
    {
      $this->providerId = $providerId;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAvailabilityRegionIds()
    {
      return $this->availabilityRegionIds;
    }

    /**
     * @param string[]|null $availabilityRegionIds
     * @return \Google\AdsApi\AdManager\v201908\SetTopBoxCreative
     */
    public function setAvailabilityRegionIds(array $availabilityRegionIds = null)
    {
      $this->availabilityRegionIds = $availabilityRegionIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\DateTime
     */
    public function getLicenseWindowStartDateTime()
    {
      return $this->licenseWindowStartDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\DateTime $licenseWindowStartDateTime
     * @return \Google\AdsApi\AdManager\v201908\SetTopBoxCreative
     */
    public function setLicenseWindowStartDateTime($licenseWindowStartDateTime)
    {
      $this->licenseWindowStartDateTime = $licenseWindowStartDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\DateTime
     */
    public function getLicenseWindowEndDateTime()
    {
      return $this->licenseWindowEndDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\DateTime $licenseWindowEndDateTime
     * @return \Google\AdsApi\AdManager\v201908\SetTopBoxCreative
     */
    public function setLicenseWindowEndDateTime($licenseWindowEndDateTime)
    {
      $this->licenseWindowEndDateTime = $licenseWindowEndDateTime;
      return $this;
    }

}
