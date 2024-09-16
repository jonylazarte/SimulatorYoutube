<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudAsset;

class AnalyzerOrgPolicyConstraint extends \Google\Model
{
  protected $customConstraintType = GoogleCloudAssetV1CustomConstraint::class;
  protected $customConstraintDataType = '';
  public $customConstraint;
  protected $googleDefinedConstraintType = GoogleCloudAssetV1Constraint::class;
  protected $googleDefinedConstraintDataType = '';
  public $googleDefinedConstraint;

  /**
   * @param GoogleCloudAssetV1CustomConstraint
   */
  public function setCustomConstraint(GoogleCloudAssetV1CustomConstraint $customConstraint)
  {
    $this->customConstraint = $customConstraint;
  }
  /**
   * @return GoogleCloudAssetV1CustomConstraint
   */
  public function getCustomConstraint()
  {
    return $this->customConstraint;
  }
  /**
   * @param GoogleCloudAssetV1Constraint
   */
  public function setGoogleDefinedConstraint(GoogleCloudAssetV1Constraint $googleDefinedConstraint)
  {
    $this->googleDefinedConstraint = $googleDefinedConstraint;
  }
  /**
   * @return GoogleCloudAssetV1Constraint
   */
  public function getGoogleDefinedConstraint()
  {
    return $this->googleDefinedConstraint;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AnalyzerOrgPolicyConstraint::class, 'Google_Service_CloudAsset_AnalyzerOrgPolicyConstraint');
