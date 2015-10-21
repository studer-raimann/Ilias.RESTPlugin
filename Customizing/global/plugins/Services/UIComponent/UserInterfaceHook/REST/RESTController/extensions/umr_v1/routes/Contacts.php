<?php
/**
 * ILIAS REST Plugin for the ILIAS LMS
 *
 * Authors: D.Schaefer and T.Hufschmidt <(schaefer|hufschmidt)@hrz.uni-marburg.de>
 * Since 2014
 */
namespace RESTController\extensions\umr_v1;


// This allows us to use shortcuts instead of full quantifier
// Requires: $app to be \RESTController\RESTController::getInstance()
use \RESTController\libs as Libs;
use \RESTController\core\auth as Auth;


// Put implementation into own URI-Group
$app->group('/v1/umr', function () use ($app) {
  /**
   * Route: GET /v1/umr/contacts
   *  [Without HTTP-GET Parameters] Get all contacts of the user given by the access-token.
   *  [With HTTP-GET Parameters] Get the contact with given contactIds for the user given by the access-token.
   *  [This endpoint CAN parse HTTP-GET parameters, eg. ...?contactids=1,2,3,10]
   *
   * @See docs/api.pdf
   */
  $app->get('/contacts', '\RESTController\libs\OAuth2Middleware::TokenRouteAuth', function () use ($app) {
    // Fetch userId & userName
    $auth         = new Auth\Util();
    $accessToken  = $auth->getAccessToken();

    try {
      $request      = $app->request;
      $contactIdString  = $request->params('contactids', null);

      // With HTTP-GET Parameter (fetch by contactIds)
      if ($contactIdString) {
        $contactIds   = Libs\RESTLib::parseIdsFromString($contactIdString, true);
        $ccontacts    = Contacts::getContacts($accessToken, $contactIds);
      }
      // Fetch all contacts
      else
        $ccontacts    = Contacts::getAllContacts($accessToken);

      // Output result
      $app->success($ccontacts);
    }
    catch (Libs\Exceptions\IdParseProblem $e) {
      $app->halt(422, $e->getMessage(), $e->getRESTCode());
    }
    catch (Exceptions\Contacts $e) {
      $responseObject         = Libs\RESTLib::responseObject($e->getMessage(), $e->getRestCode());
      $responseObject['data'] = $e->getData();
      $app->halt(500, $responseObject);
    }
  });


  /**
   * Route: GET /v1/umr/contacts/:contactId
   *  Get the contact with given contactId for the user given by the access-token.
   *  [This endpoint parses one URI parameter, eg. .../10]
   *
   * @See docs/api.pdf
   */
  $app->get('/contacts/:contactId', '\RESTController\libs\OAuth2Middleware::TokenRouteAuth', function ($contactId) use ($app) {
    // Fetch userId & userName
    $auth         = new Auth\Util();
    $accessToken  = $auth->getAccessToken();

    try {
      // Fetch user-information
      $ccontacts    = Contacts::getContacts($accessToken, $contactId);

      // Output result
      $app->success($ccontacts);
    }
    catch (Exceptions\Contacts $e) {
      $responseObject         = Libs\RESTLib::responseObject($e->getMessage(), $e->getRestCode());
      $responseObject['data'] = $e->getData();
      $app->halt(500, $responseObject);
    }
  });


  /**
   * Route: POST /v1/umr/contacts
   *  Adds a contact to the user given by the access-token.
   *
   * @See docs/api.pdf
   */
  $app->post('/contacts', '\RESTController\libs\OAuth2Middleware::TokenRouteAuth', function () use ($app) { $app->halt(500, '<STUB - IMPLEMENT ME!>'); });


  /**
   * Route: DELETE /v1/umr/contacts
   *  Deletes a contacts for the user given by the access-token.
   *
   * @See docs/api.pdf
   */
  $app->delete('/contacts', '\RESTController\libs\OAuth2Middleware::TokenRouteAuth', function () use ($app) { $app->halt(500, '<STUB - IMPLEMENT ME!>'); });

// End of '/v1/umr/' URI-Group
});