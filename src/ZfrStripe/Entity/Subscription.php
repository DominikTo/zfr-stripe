<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace ZfrStripe\Entity;

use DateTime;

/**
 * Entity that represents a simple Stripe subscription
 *
 * @author  Michaël Gallego <mic.gallego@gmail.com>
 * @licence MIT
 */
class Subscription
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $stripeId;

    /**
     * @var StripeSubscriberInterface
     */
    protected $customer;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var DateTime
     */
    protected $startedAt;

    /**
     * @var DateTime|null
     */
    protected $cancelledAt;

    /**
     * @var DateTime|null
     */
    protected $endedAt;

    /**
     * @var DateTime
     */
    protected $currentPeriodStart;

    /**
     * @var DateTime
     */
    protected $currentPeriodEnd;

    /**
     * @var DateTime|null
     */
    protected $trialStart;

    /**
     * @var DateTime|null
     */
    protected $trialEnd;

    /**
     * @var Discount|null
     */
    protected $discount;
}
